<?php 
class User extends CI_controller{
    public function index(){
        $data['display']=$this->datawork->calling('insertbook');
        $this->load->view('header');
        $this->load->view('home',$data);
        $this->load->view('footer');
        
    }
    public function view_book($id=NULL){
        $data['infor']=$this->datawork->calling_onedata('insertbook', array('id'=>$id));
        $this->load->view('header');
        $this->load->view('view_book',$data);
    }
}
?>