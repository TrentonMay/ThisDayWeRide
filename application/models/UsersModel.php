<?php
class UsersModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }
    function getAllUsers(){
        $sql = "select * from users order by userid";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    function getCurrentUser($userid){
        $sql = 'select * from users where userid = '. $userid;
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
}