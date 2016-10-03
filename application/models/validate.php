<?php
class Validate extends CI_Model{
    public function __construct()
    {
        parent::__construct();

    }
    function login($username, $password){
        $sql = 'select * from users where username = "'.$username.'"'.' and password = "'.$password.'"';
        $query = $this->db->query($sql);
        $result = $query->result();

        if($result){
            $this->validate->startSession($result);
            return true;
        }else{
            return false;
        }
    }

    function adminLogin($username,$password){
        $sql = 'select * from users where username ="'. $username.'"'.' and password = "'.$password.'" and admin = '. 1;
        $query = $this->db->query($sql);
        $result = $query->result();

        if($result){
            $this->validate->startSession($result);
            return true;
        }else{
            return false;
        }
    }

    function startSession($data){
        $this->load->library('session');
        $object = $data[0];
        $array = json_decode(json_encode($object), true);

        $userid = (int)$array['userid'];
        $username = $array['username'];
        $password = $array['password'];
        $email = $array['email'];

        $newdata = array(
            'userid' => $userid,
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'logged_in' => true
        );
        $this->session->set_userdata($newdata);
    }
}