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
        $ridesArray = $this->grabRides();
        $this->load->view('rides', $ridesArray);
    }
    function adminRides(){
        $ridesArray = $this->grabRides();
        $this->load->view('admin-rides', $ridesArray);
    }
    function grabRides(){
        $userrides = $this->RidesModel->getAllRides();
        $rideData = $this->ridesArray($userrides);
        $ridesArray = array('ridesArray' => $rideData);
        return $ridesArray;
    }
    function searchRides(){
        $state = $this->input->post('state');
        $zip = $this->input->post('zip');
        $userrides = $this->RidesModel->searchRide($zip,$state);
        $rideData = $this->ridesArray($userrides);
        $ridesArray = array('ridesArray' => $rideData);
        $this->load->view('rides', $ridesArray);
    }
    function userDash(){
        $user = $this->session->userdata('userid');
        $userRides = $this->RidesModel->getUserRide($user);
        $rideData = $this->ridesArray($userRides);
        $ridesArray = array('ridesArray' => $rideData);
        $this->load->view('user-dashboard', $ridesArray);
    }

    function ridesArray($data){
        $newarray = array();
        foreach($data as $object){
            $array = json_decode(json_encode($object), true);

            $rideid = (int)$array['rideid'];
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
            $time = $array['time'];

            $newdata = array(
                'rideid' => $rideid,
                'title' => $title,
                'date' => $date,
                'ridetime' => $ridetime,
                'StartAddress' => $saddress,
                'StartCity' => $scity,
                'StartState' => $sstate,
                'StartZip' => $szip,
                'EndZipcode' => $ezip,
                'EndCity' => $ecity,
                'image' => $image,
                'time' => $time
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
                'image' => $result['file_name'],
                'time' => time()
            );
            $this->db->insert('rides', $data);
        }
        redirect('Rides/index');
    }
    function adminAddRide(){
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
                'image' => $result['file_name'],
                'time' => time()
            );
            $this->db->insert('rides', $data);
        }
        redirect('Rides/adminRideLink', 'Refresh');
    }
    function saveRide($rideid){
        $data = $this->RidesModel->getCurrentRide($rideid);
        $array = json_decode(json_encode($data), true);

        $user = $this->session->userdata('userid');
        $newdata = array(
            'userid' => $user,
            'rideid' => $array[0]['rideid'],
            'title' => $array[0]['title'],
            'date' => $array[0]['date'],
            'ridetime' => $array[0]['ridetime'],
            'StartAddress' => $array[0]['StartAddress'],
            'StartCity' => $array[0]['StartCity'],
            'StartState' => $array[0]['StartState'],
            'StartZip' => $array[0]['StartZip'],
            'EndZipcode' => $array[0]['EndZipcode'],
            'EndCity' => $array[0]['EndCity'],
            'image' => $array[0]['image'],
            'time' => $array[0]['time']
        );
        $this->db->insert('savedRides', $newdata);
        redirect("Rides/index", "refresh");
    }
    function adminRideLink(){
        $ridesArray = $this->grabRides();
        $this->load->view("admin-rides", $ridesArray);
    }

    function deleteRide($rideid, $image){
        $this->db->where('rideid', $rideid);
        $this->db->delete('rides');
        unlink(FCPATH.'userRides/'.$image);
        redirect("Rides/adminRideLink","refresh");
    }
    function requestUpdateRide($rideid){
        $data = $this->RidesModel->getCurrentRide($rideid);
        $array = json_decode(json_encode($data), true);
        $userRide = $this->RidesModel->getAllRides();
        $RidesData = $this->ridesArray($userRide);
        $this->load->view('update-ride', array('ridesArray' => $RidesData, 'rideData' => $array));
    }
    function updateRide($rideid){
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
            'image' => $this->input->post('image'),
            'time' => time()
        );
        $this->db->where('rideid', $rideid);
        $this->db->update('rides', $data);
        redirect('Rides/adminRideLink', "refresh");
    }
    function deleteSavedRide($rideid){
        $this->db->where('rideid', $rideid);
        $this->db->delete('savedRides');
        redirect("Rides/userDash", 'refresh');
    }
}