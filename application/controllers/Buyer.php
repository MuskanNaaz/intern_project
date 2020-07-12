<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 03-Mar-19
 * Time: 9:06 AM
 */

class Buyer extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('buyer')) {
            redirect('buyer/index');
        }
        $this->form_validation->set_error_delimiters("<small class='text-danger'>", "</small>");
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run()) {
            $data = array(
                'username' => $_POST['username'],
                'password' => $_POST['password']
            );
            if ($this->datawork->check_data('buyer_login', $data) == true) {
                $this->session->set_userdata('buyer_login', $_POST['username']);
                redirect('buyer/buyer_order');
            } else {
                $this->session->set_flashdata('success', "<div class='alert  text-danger'><h6>username or password is wrong</h6></div>");
                redirect('buyer/index');
            }
            } else {
                $data['info']=$this->datawork->calling('buyer_login');
                $this->load->view('buyer/buyer_header',$data);
                $this->load->view('buyer/buyer_login');
            }
    }
    public function buyer_address()
    {
        $this->form_validation->set_error_delimiters("<small class='text-danger'>", "</small>");
        $this->form_validation->set_rules('country', 'country', 'required');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('mobile', 'mobile', 'required|numeric');
        $this->form_validation->set_rules('pincode', 'pincode', 'required|numeric');
        $this->form_validation->set_rules('street1', 'street1', 'required');
        $this->form_validation->set_rules('street2', 'street2', 'required');
        $this->form_validation->set_rules('landmark', 'landmark', 'required');
        $this->form_validation->set_rules('city', 'city', 'required');
        $this->form_validation->set_rules('state', 'state', 'required');
        if ($this->form_validation->run()) {
            $data=array(
                'country'=>$_POST['country'],
                'name'=>$_POST['name'],
                'mobile'=>$_POST['mobile'],
                'pincode'=>$_POST['pincode'],
                'street1'=>$_POST['street1'],
                'street2'=>$_POST['street2'],
                'landmark'=>$_POST['landmark'],
                'city'=>$_POST['city'],
                'state'=>$_POST['state'],
            );
            $this->datawork->insert('buyer_address',$data);
            $this->session->set_flashdata("success","<div class='alert bg-info text-white mt-3' 
 style='border-radius:100px 100px 100px 80px;padding: 5px; width: 40%;margin-left: 35%;p-2'> Data is inserted sucessfully!!</div>");
            redirect('buyer/buyer_address');

        } else {
            $data['info'] = $this->datawork->calling('buyer_login');
            $this->load->view('buyer/buyer_header', $data);
            $this->load->view('buyer/buyer_address');
        }
    }
    public function buyer_create(){
        $this->form_validation->set_error_delimiters("<small class='text-danger'>","</small>");
        $this->form_validation->set_rules('newuser','newuser','required');
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('newpassword','newpassword','required');
        if($this->form_validation->run()) {
            $data=array(
                'newuser'=>$_POST['newuser'],
                'email'=>$_POST['email'],
                'newpassword'=>$_POST['newpassword']
            );

            $this->datawork->insert('buyer_signup',$data);
            $this->session->set_flashdata("success","<div class='alert bg-info text-white mt-3' 
            style='border-radius:100px 100px 100px 80px;padding: 5px; width: 40%;margin-left: 35%;p-2'> Data is inserted sucessfully!!</div>");
            redirect('buyer/buyer_create');
        }
        else
        {
            $data['info']=$this->datawork->calling('buyer_login');
            $this->load->view('buyer/buyer_header',$data);
            $this->load->view('buyer/buyer_login');}

    }

}