<?php 
class User extends CI_controller{
    public function index(){
        $this->form_validation->set_error_delimiters("<small class='text-danger'>","</small>");
        $this->form_validation->set_rules('name','name','required|alpha');
        $this->form_validation->set_rules('contact','contact','required|numeric');
        if(isset($_POST['order'])){
        if($this->form_validation->run()){
            $data=[
                'name'=> $_POST['name'],
                'contact'=> $_POST['contact'],
                'eggroll'=> $_POST['eggroll'],
                'momos'=> $_POST['momos'],
                'sandwitch'=> $_POST['sandwitch'],
                'pizza'=> $_POST['pizza'],
                'burger'=> $_POST['burger'],
                'bread'=> $_POST['bread']
            ];
            echo $total = $_POST['total'];
            $tax = $_POST['gst'];
            $pay  = $_POST['payable'];
            
            $msg = "Dear," . $_POST['name'] . " you order is recived, your order amount is:$total and $tax(%18 GST) pay Rs. $pay ";
            $this->datawork->insert_data('food',$data);
            
            redirect("http://api.msg91.com/api/v2/sendsms?message=$msg&authkey=255108AsWkIhuXpb5c3026c8&mobiles=".$_POST['contact']."&route=4&sender=CODEWS&country=91");
        }
        }
            $data['price']=$this->datawork->calling('price');   
            $this->load->view('home',$data);
    
        
    }
  
    public function show(){
        $data['order']=$this->datawork->calling('food');
         $this->load->view('show',$data);
    }
      public function delete($id=NULL){
        $this->datawork->delete_data('food',['id'=>$id]);
        $this->session->set_flashdata("success","<div class='alert bg-danger text-white'>Data deleted successfully!!</div>");
        redirect('user/index');
    }
    
}
?>