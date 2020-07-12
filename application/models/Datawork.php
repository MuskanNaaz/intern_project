<?php

class Datawork extends CI_model
{
    public function insert($table, $fields)
    {
        $this->db->insert($table, $fields);
    }

    public function calling($table, $cond = NULL)
    {
        if ($cond == NULL) {
            $data = $this->db->get($table);
        } else {
            $data = $this->db->where($cond)->get($table);
        }
        return $data->result();
    }
    public function check_data($table,$cond){
        $data=$this->db->where($cond)->get($table);
        if($data->num_rows()<1){
            return false;
        }
        else{
            return true;
        }
    }
    public function calling_onedata($table,$cond){
        $data =$this->db->where($cond)
            ->get($table);
        return $data->result();
    }
    public function update_data($table,$fields,$con){
        $this->db->update($table,$fields,$con);
    }
    public function count_data($table){
        $data = $this->db->get($table);
        return $data->num_rows();
    }
}
?>
