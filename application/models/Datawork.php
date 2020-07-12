<?php
class Datawork extends CI_model{
    public function insert_data($table,$fields){
        $this->db->insert($table,$fields);
        
    }
    public function calling($table,$cond=NULL){
        if($cond==NULL){
        $data=$this->db->get($table);
        }
        else{
            $data= $this->db->where($cond)->get($table);
        }
        return $data->result();
    }
    public function delete_data($table,$cond){
        $this->db->delete($table,$cond);
    }
    public function update_data($table,$fields,$con){
        $this->db->update($table,$fields,$con);
    }
}
?>