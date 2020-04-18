<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cities extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Mdl_city');
    }
    public function index(){
        $cities=$this->Mdl_city->getAllRecords();
        $data=array(
            'cities'=>$cities
        );
        $this->load->view('cities/index',$data);
    }
    public function add(){
        $this->load->view('cities/add');
    }
    public function insert(){
        $title=$this->input->post('title');

        $insertData=array(
            'title'=>$title,
            'created_at'=>date('Y-m-d h:i:s'),
            'updated_at'=>date('Y-m-d h:i:s'),
        );

        $this->Mdl_city->insertData($insertData);

        redirect('cities');
    }
    public function edit($id){
        //select * from cities where id = 5 and firsname=keyur
        $where=array(
            'id'=>$id
        );
        $city=$this->Mdl_city->getRecord($where);
        $data=array(
            'city'=>$city
        );
        $this->load->view('cities/edit',$data);
    }
    public function update(){
        $id=$this->input->post('id');
        $title=$this->input->post('title');

        $updateData=array(
            'title'=>$title,
            'updated_at'=>date('Y-m-d h:i:s'),
        );   

        $this->Mdl_city->updateData($updateData,$id);

        redirect('cities');
    }
    public function delete($id){
        $this->Mdl_city->delete($id);
        redirect('cities');
    }
}
