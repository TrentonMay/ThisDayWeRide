<?php
class Rides extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('RidesModel');
    }

    function index(){
        $userrides = $this->RidesModel->getAllRides();
        $rideData = $this->ridesArray($userrides);
        $ridesArray = array('ridesArray' => $rideData);
        $this->load->view('rides', $ridesArray);
    }

    function ridesArray($data){
        $newarray = array();
        foreach($data as $object){
            $array = json_decode(json_encode($object), true);

            $id = (int)$array['id'];
            $title = $array['title'];
            $date = $array['date'];
            $ridetime = $array['ridetime'];
            $saddress = $array['StartAddress'];
            $scity = $array['StartCity'];
            $sstate = $array['StartState'];
            $szip = (int)$array['StartZip'];
            $ezip = (int)$array['EndZipcode'];
            $ecity = $array['EndCity'];
            $image = $array['image'];

            $newdata = array(
                'id' => $id,
                'title' => $title,
                'date' => $date,
                'ridetime' => $ridetime,
                'StartAddress' => $saddress,
                'StartCity' => $scity,
                'StartState' => $sstate,
                'StartZip' => $szip,
                'EndZipcode' => $ezip,
                'EndCity' => $ecity,
                'image' => $image
            );
            array_push($newarray, $newdata);
        }
        return $newarray;
    }

    function addRide(){
        $config['upload_path'] = FCPATH.'userRides/';
        $config['allowed_types'] = 'gif|jpg|png';
        $file_name = time();
        $config['file_name'] = $file_name;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')){
            $message = $this->upload->display_errors();
            echo "<script type='text/javascript'>alert('$message')</script>";
        }else{
            $result = $this->upload->data();

            $config['image_library'] = 'gd2';
            $config['source_image'] = $result['full_path'];
            $config['maintain_ratio'] = TRUE;
            $config['width'] = '500';
            $config['height'] = '500';
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $data = array(
                'title' => $this->input->post('title'),
                'date' => $this->input->post('date'),
                'ridetime' => $this->input->post('ridetime'),
                'StartAddress' => $this->input->post('s-address'),
                'StartCity' => $this->input->post('s-city'),
                'StartState' => $this->input->post('s-state'),
                'StartZip' => $this->input->post('s-zip'),
                'EndZipcode' => $this->input->post('e-zip'),
                'EndCity' => $this->input->post('e-city'),
                'image' => $result['file_name']
            );
            $this->db->insert('rides', $data);
        }
        redirect('Rides/index');
    }
}