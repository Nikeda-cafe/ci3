<?php


class User extends CI_Controller{
    public function profile($id = 1)
    {
        $this->load->model('TaskModel');
        $data = array(
            'tasks' => $this->TaskModel->getList()
        );
        $this->load->view('user/profile',$data);
    }

    
}