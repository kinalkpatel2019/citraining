<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Countries extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Mdl_country');
    }
    public function index(){
        $countries=$this->Mdl_country->getAllRecords();
        $data=array(
            'countries'=>$countries
        );
        $this->load->view('countries/index',$data);
    }
    public function add(){
        $this->load->view('countries/add');
    }
    public function insert(){
        $title=$this->input->post('title');

        $insertData=array(
            'title'=>$title,
            'created_at'=>date('Y-m-d h:i:s'),
            'updated_at'=>date('Y-m-d h:i:s'),
        );

        $this->Mdl_country->insertData($insertData);

        redirect('countries');
    }
    public function edit($id){
        //select * from countries where id = 5 and firsname=keyur
        $where=array(
            'id'=>$id
        );
        $country=$this->Mdl_country->getRecord($where);
        $data=array(
            'country'=>$country
        );
        $this->load->view('countries/edit',$data);
    }
    public function update(){
        $id=$this->input->post('id');
        $title=$this->input->post('title');

        $updateData=array(
            'title'=>$title,
            'updated_at'=>date('Y-m-d h:i:s'),
        );   

        $this->Mdl_country->updateData($updateData,$id);

        redirect('countries');
    }
    public function delete($id){
        $this->Mdl_country->delete($id);
        redirect('countries');
    }
}
