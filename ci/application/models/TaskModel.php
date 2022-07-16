<?php 

class TaskModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getList($id = null)
    {
        $query = $this->db->select('id,task_name')
                            ->from('task')
                            ->where('id',$id)
                            ->get();

        echo $this->db->last_query();
        return $query->result_array();
        
    }

    public function create($taskName)
    {
        $insertData = array(
            'task_name' => $taskName
        );
        $this->db->insert('task',$insertData);
    }
}

