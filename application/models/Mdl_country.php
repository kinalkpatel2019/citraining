<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_country extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
    public function getAllRecords()
    {

        $this->db->select('*');
        $this->db->from('countries');
        $query=$this->db->get();
        $records=$query->result_array();
        return $records;
    }
    public function insertData($data)
    {
        $this->db->insert('countries',$data);
    }
    public function getRecord($conditions){
        $this->db->select('*');
        $this->db->from('countries');
        $this->db->where($conditions);
        $query=$this->db->get();
        $record=$query->row_array();
        return $record;
    }
    public function updateData($data,$id){
        $this->db->where('id',$id);
        $this->db->update('countries',$data);
    }
    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('countries');
    }
}