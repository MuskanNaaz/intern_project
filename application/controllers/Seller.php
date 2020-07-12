<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 01-Mar-19
 * Time: 7:05 PM
 */

class Seller extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('seller')) {
            redirect('seller/index');
        }
        $this->form_validation->set_error_delimiters("<small class='text-danger'>", "</small>");
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run()) {
            $data = array(
                'username' => $_POST['username'],
                'password' => $_POST['password']
            );
            if ($this->datawork->check_data('seller_login', $data) == true) {
                $this->session->set_userdata('seller_login', $_POST['username']);
                redirect('seller/insertbook');
            } else {
                $this->session->set_flashdata('success', "<div class='alert  text-danger'><h6>username or password is wrong</h6></div>");
                redirect('seller/index');
            }
        } else {
            $data['info']=$this->datawork->calling('seller_login');
            $this->load->view('seller/seller_header',$data);
            $this->load->view('seller/login');
        }
    }
    public function insertbook(){
        $config['upload_path']= './access/';
        $config['allowed_types']= 'gif|jpg|png';
        $this->load->library("upload",$config);
        $this->form_validation->set_error_delimiters("<small class='text-danger'>","</small>");
        $this->form_validation->set_rules('author','author','required');
        $this->form_validation->set_rules('title','title','required');
        $this->form_validation->set_rules('price','price','required|numeric');
        $this->form_validation->set_rules('oldprice','oldprice','required|numeric');
        $this->form_validation->set_rules('isbn','isbn','required|numeric');
        $this->form_validation->set_rules('page','page','required|numeric');
        $this->form_validation->set_rules('cat','cat','required');
        $this->form_validation->set_rules('descr','descr','required');
        if($this->form_validation->run()) {
            if($this->upload->do_upload('image')) {
                $data = array(
                    'author' => $_POST['author'],
                    'title' => $_POST['title'],
                    'price' => $_POST['price'],
                    'oldprice' => $_POST['oldprice'],
                    'isbn' => $_POST['isbn'],
                    'page' => $_POST['page'],
                    'cat' => $_POST['cat'],
                    'descr' => $_POST['descr'],
                    'image' => $_FILES['image']['name']
                );
                $this->datawork->insert('insertbook', $data);
                $this->session->set_flashdata("success","<div class='alert bg-info text-white mt-3'>Data insert successfully!!</div>");

            }
            else{
                print_r($this->upload->display_errors());
                echo "Not Uploaded";
            }
            redirect('seller/insertbook');
        }
        else {
            $data['info']=$this->datawork->calling('seller_login');
            $this->load->view('seller/seller_header',$data);
            $this->load->view('seller/seller_insert');

        }

    }
    public function seller_manage(){
        $data['insert']=$this->datawork->calling('insertbook');
        $data['info']=$this->datawork->calling('seller_login');
        $this->load->view('seller/seller_header',$data);
        $this->load->view('seller/seller_manage',$data);
    }
    public function seller_create(){
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

            $this->datawork->insert('seller_signup',$data);
            $this->session->set_flashdata("success","<div class='alert bg-info text-white mt-3' 
            style='border-radius:100px 100px 100px 80px;padding: 5px; width: 40%;margin-left: 35%;p-2'> Data is inserted sucessfully!!</div>");
            redirect('seller/seller_create');
        }
        else
        {
            $data['info']=$this->datawork->calling('seller_login');
            $this->load->view('seller/seller_header',$data);
            $this->load->view('seller/login');}

    }
    public function seller_view($id=NULL){

        $data['seller']=$this->datawork->calling_onedata('insertbook', array('id'=>$id));
        $this->load->view('seller/seller_view',$data);
    }
    public function seller_edit($id=NULL)
    {
        $config['upload_path']= './access/';
        $config['allowed_types']= 'gif|jpg|png';
        $this->load->library("upload",$config);
        $this->form_validation->set_error_delimiters("<small class='text-danger'>","</small>");
        $this->form_validation->set_rules('author','author','required');
        $this->form_validation->set_rules('title','title','required');
        $this->form_validation->set_rules('price','price','required|numeric');
        $this->form_validation->set_rules('oldprice','oldprice','required|numeric');
        $this->form_validation->set_rules('isbn','isbn','required|numeric');
        $this->form_validation->set_rules('page','page','required|numeric');
        $this->form_validation->set_rules('cat','cat','required|alpha');
        $this->form_validation->set_rules('status','status','required|alpha');
        $this->form_validation->set_rules('descr','descr','required');
        if($this->form_validation->run()) {
            if($this->upload->do_upload('image')) {
                $data = array(
                    'author' => $_POST['author'],
                    'title' => $_POST['title'],
                    'price' => $_POST['price'],
                    'oldprice' => $_POST['oldprice'],
                    'isbn' => $_POST['isbn'],
                    'page' => $_POST['page'],
                    'cat' => $_POST['cat'],
                    'status' => $_POST['status'],
                    'descr' => $_POST['descr'],
                    'image' => $_FILES['image']['name']
                );
                $this->datawork->update_data('insertbook', $data,array('id'=>$id));
                $this->session->set_flashdata("success","<div class='alert bg-info text-white mt-3'>Data insert successfully!!</div>");

            }
            else{
                print_r($this->upload->display_errors());
                echo "Not Uploaded";
            }
            redirect('seller/seller_edit');
        }
        else {
            $data['infor']=$this->datawork->calling_onedata('insertbook', array('id'=>$id));
            $this->load->view('seller/seller_edit',$data);

        }

    }
    public function seller_contact(){
        $this->form_validation->set_error_delimiters("<small class='text-danger'>","</small>");
        $this->form_validation->set_rules('state','state','required');
        $this->form_validation->set_rules('city','city','required');
        $this->form_validation->set_rules('town','town','required');
        $this->form_validation->set_rules('mobile','mobile','required');
        $this->form_validation->set_rules('mobile2','mobile2','required');
        if ($this->form_validation->run()){
            $data=array(
                'state'=>$_POST['state'],
                'city'=>$_POST['city'],
                'town'=>$_POST['town'],
                'mobile'=>$_POST['mobile'],
                'mobile2'=>$_POST['mobile2']
            );
            $this->datawork->insert('seller_contact',$data);
            $this->session->set_flashdata("success","<div class='alert bg-info text-white mt-3' 
            style='border-radius:100px 100px 100px 80px;padding: 5px; width: 40%;margin-left: 35%;p-2'> Data is inserted sucessfully!!</div>");
            redirect('seller/seller_contact');
        }
        else{
            $data['info']=$this->datawork->calling('seller_login');
            $data['contact']=$this->datawork->calling('seller_contact');
        $this->load->view('seller/seller_header',$data);
        $this->load->view('seller/seller_contact',$data);
        }
    }
}
?>