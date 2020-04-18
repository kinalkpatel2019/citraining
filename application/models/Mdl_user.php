<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_user extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
    public function getAllRecords()
    {
        //select * from users
        $this->db->select('*');
        $this->db->from('users');
        $query=$this->db->get();
        $records=$query->result_array();
        return $records;
    }
    public function insertData($data)
    {
        //insert into users(email,password,firstname,....) values (emaia,dasda,....);
        $this->db->insert('users',$data);
    }
    public function getRecord($conditions){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($conditions);
        $query=$this->db->get();
        $record=$query->row_array();
        return $record;
    }
    public function updateData($data,$id){
        //update users set email=email,passwd .... where id=5
        $this->db->where('id',$id);
        $this->db->update('users',$data);
    }
    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('users');
    }
}