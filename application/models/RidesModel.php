<?php
class RidesModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        //$this->load->model('validate');
    }

    function getAllRides(){
        $sql = "select * from rides order by date";
        $query = $this->db->query($sql);
        $result = $query->result();

        return $result;
    }

    function searchRide($zip, $sState){
        $this->db->where('StartZip', $zip);
        $this->db->where('StartState', $sState);
        $query = $this->db->get('rides');
        $result = $query->result_array();

        return $result;
    }
    function getCurrentRide($rideid){
        $sql = "select * from rides where rideid = ". $rideid;
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    function getUserRide($userid){
        $sql = 'select * from savedRides where userid ='. $userid;
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    function getRecentRides(){
        $sql = "select * from rides order by 'time' limit 4";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
}