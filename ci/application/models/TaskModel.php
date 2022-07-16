<?php 

class TaskModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getList($userId = null)
    {
        $query = $this->db->select('t.id,t.task_name,t.user_id,u.name as user_name')
                            ->from('task as t')
                            ->join('user as u','u.id = t.user_id','left')
                            ->where('user_id',$userId)
                            ->get();

        echo $this->db->last_query();
        var_dump($query->result_array());
        return $query->result_array();
        
    }

    public function create($post)
    {
        $insertData = array(
            'task_name' => $post['task'],
            'user_id' => $post['user_id'],
        );
        $this->db->insert('task',$insertData);
    }
}

