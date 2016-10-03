<?php
class Users extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('UsersModel');
    }
    function index(){
        $userArray = $this->getUsers();
        $this->load->view('admin-users', $userArray);
    }
    function getUsers(){
        $users = $this->UsersModel->getAllUsers();
        $userData = $this->userArray($users);
        $userArray = array('userArray' => $userData);
        return $userArray;
    }

    function userArray($data){
        $newarray = array();
        foreach($data as $object){
            $array = json_decode(json_encode($object), true);

            $userid = $array['userid'];
            $username = $array['username'];
            $password = $array['password'];
            $email = $array['email'];
            $admin = $array['admin'];

            $newdata = array(
                'userid' => $userid,
                'username' => $username,
                'password' => $password,
                'email' => $email,
                'admin' => $admin
            );
            array_push($newarray, $newdata);
        }
        return $newarray;
    }
    function addUser(){
        $salt = "HondasAreNumberOne";

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');

        $encrypt = md5($password.$salt);
        if($email) {
            $data = array(
                'username' => $username,
                'password' => $encrypt,
                'admin' => 0,
                'email' => $email
            );
        }
            $this->db->insert('users', $data);
        redirect("Users/adminUserLink", "refresh");
    }
    function adminUserLink(){
        $userArray = $this->getUsers();
        $this->load->view('admin-users', $userArray);
    }

    function deleteUser($userid){
        $this->db->where("userid", $userid);
        $this->db->delete('users');
        redirect("Users/adminUserLink", "refresh");
    }
    function requestUpdateUser($userid){
        $data = $this->UsersModel->getCurrentUser($userid);
        $array = json_decode(json_encode($data), true);
        $users = $this->UsersModel->getAllUsers();
        $userData = $this->userArray($users);
        $this->load->view('update-user',array('userArray' => $userData, 'userData' => $array));
    }
    function updateUser($userid){
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'admin' => $this->input->post('admin'),
            'email' => $this->input->post('email')
        );
        $this->db->where('userid', $userid);
        $this->db->update('users', $data);
        redirect("Users/adminUserLink", "refresh");
    }

}