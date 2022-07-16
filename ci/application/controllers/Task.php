<?php

class Task extends CI_Controller{
    public function index($userId = null)
    {
        $this->load->model('TaskModel');
        $this->load->library('form_validation');

        $data['create'] = '';
        $data['user_id'] = $userId;
        
        if($this->input->post()){
            $this->form_validation->set_rules('task','タスク','required|min_length[5]|max_length[20]');
            if($this->form_validation->run()){
                $this->TaskModel->create($this->input->post());
                $data['create'] = true;
            }else{
                $data['create'] = false;
            }
        }
        

        $data['tasks'] = $this->TaskModel->getList($userId); 

        $this->load->view('task/task',$data);
    }
}