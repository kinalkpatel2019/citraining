<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class States extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Mdl_state');
    }
    public function index(){
        $states=$this->Mdl_state->getAllRecords();
        $data=array(
            'states'=>$states
        );
        $this->load->view('states/index',$data);
    }
    public function add(){
        $this->load->view('states/add');
    }
    public function insert(){
        $title=$this->input->post('title');

        $insertData=array(
            'title'=>$title,
            'created_at'=>date('Y-m-d h:i:s'),
            'updated_at'=>date('Y-m-d h:i:s'),
        );

        $this->Mdl_state->insertData($insertData);

        redirect('states');
    }
    public function edit($id){
        //select * from states where id = 5 and firsname=keyur
        $where=array(
            'id'=>$id
        );
        $state=$this->Mdl_state->getRecord($where);
        $data=array(
            'state'=>$state
        );
        $this->load->view('states/edit',$data);
    }
    public function update(){
        $id=$this->input->post('id');
        $title=$this->input->post('title');

        $updateData=array(
            'title'=>$title,
            'updated_at'=>date('Y-m-d h:i:s'),
        );   

        $this->Mdl_state->updateData($updateData,$id);

        redirect('states');
    }
    public function delete($id){
        $this->Mdl_state->delete($id);
        redirect('states');
    }
}
