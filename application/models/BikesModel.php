<?php
class BikesModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    function getAllBikes(){
        $sql = "select * from bikes order by 'time'";
        $query = $this->db->query($sql);
        $result = $query->result();

        return $result;
    }
    function getCurrentBike($bikeid){
        $sql = "select * from bikes where bikeid = ". $bikeid;
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    function getRecentBikes(){
        $sql = "select * from bikes order by 'time' limit 4";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
}