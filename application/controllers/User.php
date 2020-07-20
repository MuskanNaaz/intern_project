<?php
class User extends CI_controller{
    public function index(){
         $data['course']=$this->datawork->calling_limit('course',"order by RAND() LIMIT 6");
        $this->load->view('userint/home',$data);
    }
    public function login(){
        if($this->session->userdata('login')){
            redirect('user/login');
        }
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');
        if($this->form_validation->run()){
            $data = [
                'username'=> $_POST['username'],
                'password'=> $_POST['password']
            ];
            if($this->datawork->check_data('userlogin',$data)===true){
                $this->session ->set_userdata('userlogin',$_POST['email']);
                redirect('user/home');
            }
            else{
                $this->session->set_flashdata('incorrect',"username and password is incorrect");
                redirect('user/index');
            }
        }
        else{
            $this->load->view('userint/home');
        }
    }
    public function student(){
         $this->form_validation->set_error_delimiters("<small class='text-danger'>","</small>");
        $this->form_validation->set_rules('fname','fname','required');
        $this->form_validation->set_rules('lname','lname','required');
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');
        if($this->form_validation->run()) {
            $data=array(
                'fname'=>$_POST['fname'],
                'lname'=>$_POST['lname'],
                'username'=>$_POST['username'],
                'password'=>$_POST['password']
                );

            $this->datawork->insert_data('student',$data);
            $this->session->set_flashdata("success","<div class='alert bg-info text-white mt-3' 
            style='border-radius:100px 100px 100px 80px;padding: 5px; width: 40%;margin-left: 35%;p-2'> Data is inserted sucessfully!!</div>");
            redirect('userint/index');
        }
        else
        {   
             
            $this->load->view('userint/home');
        }
    }
    public function topicInt($cat=NULL){
        
        $data['course']=$this->datawork->join_data('topic','course','course.course=topic.cat_id');
        $data['topic']=$this->datawork->calling('topic',['cat_id'=>$cat]);
        $this->load->view('userint/topicInt',$data);
    }
    public function topicDetails($course,$topic=NULL){  
        $data['topic']=$this->datawork->join_data('topic','course','course.course=topic.cat_id');
        $data['cat']=$this->datawork->calling('topic',['cat_id'=>$course]);
        $data['topic']=$this->datawork->calling_onedata('topic',['topic_title'=>$topic,'cat_id'=>$course]);
        
        $this->load->view('userint/topicDetails',$data);
    }
    public function questionInt($topic=NULL){
        $this->load->view('userint/questionInt',$data);
    }
}
?>