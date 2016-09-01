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
        $sql = "select * from rides where StartZip =".$zip . "and StartState =".$sState;
        $query = $this->db->query($sql);
        $result = $query->result();

        return $result;
    }

}