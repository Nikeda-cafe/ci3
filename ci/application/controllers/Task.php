<?php

class Task extends CI_Controller{
    public function index($id = null)
    {
        $this->load->model('TaskModel');
        $this->load->library('form_validation');

        $data['create'] = '';
        
        if($this->input->post()){
            $this->form_validation->set_rules('task','タスク','required|min_length[5]|max_length[20]');
            if($this->form_validation->run()){
                $this->TaskModel->create($this->input->post('task'));
                $data['create'] = true;
            }else{
                $data['create'] = false;
            }
        }
        

        $data['tasks'] = $this->TaskModel->getList($id); 

        $this->load->view('task/task',$data);
    }
}