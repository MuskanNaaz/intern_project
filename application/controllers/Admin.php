<?php 
class Admin extends CI_controller{
    public function index(){
        if($this->session->userdata('admin')){
            redirect('admin/index');
        }
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('password','password','required');
        if($this->form_validation->run()){
            $data = [
                'email'=> $_POST['email'],
                'password'=> $_POST['password']
            ];
            if($this->datawork->check_data('adminlogin',$data)===true){
                $this->session ->set_userdata('adminlogin',$_POST['email']);
                redirect('admin/home');
            }
            else{
                $this->session->set_flashdata('incorrect',"username and password is incorrect");
                redirect('admin/index');
            }
        }
        else{
            $this->load->view('login');
        }
        
    }
    public function home(){
        $this->load->view('home');
    }
    public function topic(){
        $this->form_validation->set_error_delimiters("<small class='text-danger'>","</small>");
        $this->form_validation->set_rules('topic_title','topic_title','required');
        $this->form_validation->set_rules('topic_desc','topic_desc','required');
        $this->form_validation->set_rules('topic_status','topic_status','required');
        $this->form_validation->set_rules('cat_id','cat_id','required');
        
        if($this->form_validation->run()) {
            $data=array(
                'topic_title'=>$_POST['topic_title'],
                'topic_desc'=>$_POST['topic_desc'],
                'topic_status'=>$_POST['topic_status'],
                'cat_id'=>$_POST['cat_id']
                
            );

            $this->datawork->insert_data('topic',$data);
            $this->session->set_flashdata("success","<div class='alert bg-info text-white mt-3' 
            style='border-radius:100px 100px 100px 80px;padding: 5px; width: 40%;margin-left: 35%;p-2'> Data is inserted sucessfully!!</div>");
            redirect('admin/topic');
        }
        else
        {
        $data['course']=$this->datawork->calling('course');
        $data['topic']=$this->datawork->calling('topic');
        $this->load->view('topic',$data);
    }
    }
    public function course(){
         $this->form_validation->set_error_delimiters("<small class='text-danger'>","</small>");
        $this->form_validation->set_rules('course','course','required');
        $this->form_validation->set_rules('course_icon','course_icon','required');
        $this->form_validation->set_rules('course_desc','course_desc','required');
        $this->form_validation->set_rules('course_status','course_status','required');
        
        if($this->form_validation->run()) {
            $data=array(
                'course'=>$_POST['course'],
                'course_icon'=>$_POST['course_icon'],
                'course_desc'=>$_POST['course_desc'],
                'course_status'=>$_POST['course_status']
            );

            $this->datawork->insert_data('course',$data);
            $this->session->set_flashdata("success","<div class='alert bg-info text-white mt-3' 
            style='border-radius:100px 100px 100px 80px;padding: 5px; width: 40%;margin-left: 35%;p-2'> Data is inserted sucessfully!!</div>");
            redirect('admin/course');
        }
        else
        {
        $data['course']=$this->datawork->calling('course');
        $this->load->view('course',$data);
    }
    }
    public function question(){
         $this->form_validation->set_error_delimiters("<small class='text-danger'>","</small>");
        $this->form_validation->set_rules('title','title','required');
        $this->form_validation->set_rules('opt1','opt1','required');
        $this->form_validation->set_rules('opt2','opt2','required');
        $this->form_validation->set_rules('opt3','opt3','required');
        $this->form_validation->set_rules('opt4','opt4','required');
        $this->form_validation->set_rules('ans','ans','required');
        $this->form_validation->set_rules('cat_id','cat_id','required');
        $this->form_validation->set_rules('topic_id','topic_id','required');
        if($this->form_validation->run()) {
            $data=array(
                'title'=>$_POST['title'],
                'opt1'=>$_POST['opt1'],
                'opt2'=>$_POST['opt2'],
                'opt3'=>$_POST['opt3'],
                'opt4'=>$_POST['opt4'],
                'ans'=>$_POST['ans'],
                'cat_id'=>$_POST['cat_id'],
                'topic_id'=>$_POST['topic_id']
                );
            $this->datawork->insert_data('question',$data);
            $this->session->set_flashdata("success","<div class='alert bg-info text-white mt-3' 
            style='border-radius:100px 100px 100px 80px;padding: 5px; width: 40%;margin-left: 35%;p-2'> Data is inserted sucessfully!!</div>");
            redirect('admin/question');}
        else{
        $data['course']=$this->datawork->calling('course');
        $data['topic']=$this->datawork->join_data('topic','course','course.course=topic.cat_id');
        $this->load->view('question',$data);
        }
    }
}
?>