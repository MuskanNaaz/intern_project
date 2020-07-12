<?php 
class Admin extends CI_controller{
    public function index(){
        if ($this->session->userdata('admin')) {
            redirect('admin/index');
        }
        $this->form_validation->set_error_delimiters("<small class='text-danger'>", "</small>");
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run()) {
            $data = array(
                'username' => $_POST['username'],
                'password' => $_POST['password']
            );
            if ($this->datawork->check_data('admin_login', $data) == true) {
                $this->session->set_userdata('admin_login', $_POST['username']);
                redirect('admin/manage');
            } else {
                $this->session->set_flashdata('success', "<div class='alert  text-danger'><h6>username or password is wrong</h6></div>");
                redirect('admin/index');
            }
        } else {  
            $this->load->view('header');    
            $this->load->view('admin/admin_login');
        }
    }
    public function manage(){
        $data['insert']=$this->datawork->calling('insertbook');
        $this->load->view('header');
        $this->load->view('admin/manage',$data);
    }

}
?>