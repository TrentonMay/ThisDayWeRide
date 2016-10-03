<?php
class SignUp extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('email');
        $this->load->library('session');
    }

    function index(){
        $salt = "HondasAreNumberOne";

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');

        $encrypt = md5($password.$salt);
        if(valid_email($email)){
            $data = array(
                'username' => $username,
                'password' => $encrypt,
                'admin' => 0,
                'email' => $email
            );

            $this->db->insert('users', $data);
            echo "<script type='text/javascript'>alert('Welcome to This Day We Ride! /n You may now sign in')</script>";
            $this->load->view('login');
        }else{
            echo "<script type='text/javascript'>alert('Sorry! We could not create your account. Please try again )</script>";
            $this->load->view('login');
        }
    }
}