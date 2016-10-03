<?php
class Bikes extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('BikesModel');
        $this->load->model('RidesModel');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->database();

    }

    function index(){
        $bikesArray = $this->getBikes();
        $this->load->view('bikes', $bikesArray);
    }
    function adminBikes(){
        $bikesArray = $this->getBikes();
        $this->load->view('admin-bikes', $bikesArray);
    }
    function getBikes(){
        $userbikes = $this->BikesModel->getAllBikes();
        $bikesData = $this->bikeArray($userbikes);
        $bikesArray = array('bikesArray' => $bikesData);

        return $bikesArray;
    }
    function landing(){
        $userbikes = $this->BikesModel->getRecentBikes();
        $userRides = $this->RidesModel->getRecentRides();
        $ridesData = $this->ridesArray($userRides);
        $bikesData = $this->bikeArray($userbikes);
        $this->load->view('landing', array('bikesArray' => $bikesData, 'ridesArray' => $ridesData));
    }
    function bikeArray($data){
        $newarray = array();

        foreach($data as $object){
            $array = json_decode(json_encode($object), true);

            $bikeid = (int)$array['bikeid'];
            $model = $array['model'];
            $image = $array['image'];
            $username = $array['username'];
            $time = $array['time'];

            $newdata = array(
                'bikeid' => $bikeid,
                'model' => $model,
                'image' => $image,
                'username' => $username,
                'time' => $time
            );
            array_push($newarray, $newdata);
        }
        return $newarray;

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
    function addBike(){
        $config['upload_path'] = FCPATH.'userBikes/';
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

            $uploadtime = date('Y/m/d h:i:s');;

            $uname = $this->session->userdata('username');

            if($uname = !null){
                $uname = $this->session->userdata('username');
            }else{
                $uname = "Guest User";
            }

            $data = array(
                'username' => $uname,
                'model' => $this->input->post('model'),
                'image' => $result['file_name'],
                'time' => $uploadtime
            );
            $this->db->insert('bikes', $data);
        }
        redirect('Bikes/index');
    }
    function adminAddBike(){
        $config['upload_path'] = FCPATH.'userBikes/';
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

            $uploadtime = time();

            $data = array(
                'username' => $this->input->post('username'),
                'model' => $this->input->post('model'),
                'image' => $result['file_name'],
                'time' => $uploadtime
            );
            $this->db->insert('bikes', $data);
        }
        redirect('Bikes/adminBikeLink', "refresh");
    }

    function adminBikeLink(){
        $bikesArray = $this->getBikes();
        $this->load->view('admin-bikes', $bikesArray);
    }
    function deleteBike($bikeid, $image){
        $this->db->where('bikeid', $bikeid);
        $this->db->delete('bikes');
        unlink(FCPATH.'userbikes/'.$image);
        redirect("Bikes/adminBikeLink","refresh");
    }
    function requestUpdateBike($bikeid){
        $data = $this->BikesModel->getCurrentBike($bikeid);
        $array = json_decode(json_encode($data), true);
        $userbikes = $this->BikesModel->getAllBikes();
        $bikesData = $this->bikeArray($userbikes);
        $this->load->view('update-bike', array('bikesArray' => $bikesData, 'bikeData' => $array));
    }
    function updateBike($bikeid){
        $uploadtime = time();
        $data = array(
            'bikeid' => $bikeid,
            'username' => $this->input->post('username'),
            'model' => $this->input->post('model'),
            'image' => $this->input->post('image'),
            'time' => $uploadtime
        );
        $this->db->where('bikeid', $bikeid);
        $this->db->update('bikes', $data);
        redirect('Bikes/adminBikeLink', "refresh");
    }
}