<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Mdl_user');
    }
    public function index(){
        $users=$this->Mdl_user->getAllRecords();
        $data=array(
            'users'=>$users
        );
        $this->load->view('users/index',$data);
    }
    public function add(){
        $this->load->view('users/add');
    }
    public function insert(){
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $firstname=$this->input->post('firstname');
        $lastname=$this->input->post('lastname');

        $insertData=array(
            'email'=>$email,
            'password'=>$password,
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'created_at'=>date('Y-m-d h:i:s'),
            'updated_at'=>date('Y-m-d h:i:s'),
        );

        $this->Mdl_user->insertData($insertData);

        redirect('users');
    }
    public function edit($id){
        //select * from users where id = 5 and firsname=keyur
        $where=array(
            'id'=>$id
        );
        $user=$this->Mdl_user->getRecord($where);
        $data=array(
            'user'=>$user
        );
        $this->load->view('users/edit',$data);
    }
    public function update(){
        $id=$this->input->post('id');
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $firstname=$this->input->post('firstname');
        $lastname=$this->input->post('lastname');

        $updateData=array(
            'email'=>$email,
            'password'=>$password,
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'updated_at'=>date('Y-m-d h:i:s'),
        );   

        $this->Mdl_user->updateData($updateData,$id);

        redirect('users');
    }
    public function delete($id){
        $this->Mdl_user->delete($id);
        redirect('users');
    }
}
