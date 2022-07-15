<?php 

class TaskModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getList()
    {
        $query = $this->db->get('task');
        echo $this->db->last_query();
        if($query->num_rows() > 0){
            return $query->result_array();
        }else{
            return array();
        }
    }
}

