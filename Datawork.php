<?php
class Datawork extends CI_model{
    public function insert_data($table,$fields){
        $this->db->insert($table,$fields);
    }
    public function check_data($table,$cond){
        $data= $this->db->where($cond)->get($table);
        if($data->num_rows()<1){
            return false;
        }
        else{
            return true;
        }
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
    public function calling_limit($table,$cond){
    $data = $this->db->query("select * from $table $cond");
    return $data->result(); 
    }
    public function join_data($table1,$table2,$cond){
        $data = $this->db->select('*')
                ->from($table1)
                ->join($table2,$cond)
                ->get();
        return $data->result();
        
    }
}
?>