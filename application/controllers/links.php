<?php
class Links extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
    }
    function homeLink(){
        $this->load->view('landing');
    }
    function loginLink(){
        $this->load->view('login');
    }
    function ridesLink(){
        $this->load->view('rides');
    }
    function bikesLink(){
        $this->load->view('bikes');
    }
    function dashLink(){
        $this->load->view('user-dashboard');
    }
    function adminLink(){
        $this->load->view('admin-login');
    }
}

?>