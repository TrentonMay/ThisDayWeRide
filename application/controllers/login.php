<?php
class Login extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('validate');
        $this->load->model('RidesModel');
        $this->load->library('form_validation');
    }
    function index(){
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        $salt = "HondasAreNumberOne";
        $username = $_POST['username'];
        $password = $_POST['password'];
        $encrypt = md5($password.$salt);

        $query = $this->validate->login($username, $encrypt);

        if($this->form_validation->run() == TRUE && $query){
            redirect('/links/homeLink', 'refresh');
        }else{
            echo "<script type='text/javascript'>alert('Your Login Information is incorrect')</script>";
            $this->load->view('login');
        }
    }
    function admin(){
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        $salt = "HondasAreNumberOne";
        $username = $_POST['username'];
        $password = $_POST['password'];
        $encrypt = md5($password . $salt);

        $query = $this->validate->adminLogin($username, $encrypt);

        if ($this->form_validation->run() == TRUE && $query) {
            $rides = $this->RidesModel->getAllRides();
            $rideData = $this->ridesArray($rides);
            $ridesArray = array('ridesArray' => $rideData);
            $this->load->view('admin-rides', $ridesArray);
        } else {
            echo "<script type='text/javascript'>alert('Your Login Information is incorrect')</script>";
            $this->load->view('admin-login');
        }
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
                'image' => $image
            );
            array_push($newarray, $newdata);
        }
        return $newarray;
    }
    function Logout(){
        $this->session->sess_destroy();
        $this->load->view('landing');
        redirect('/links/homeLink', 'refresh');
    }
}