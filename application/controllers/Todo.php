<?php

class Todo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('todo_model');
    }

    public function index()
    {
        $all_todos = $this->todo_model->get_todos();
        $todoData = array(
            "todos" => $all_todos
        );
        $this->load->view('todo', $todoData);
    }

    public function insert()
    {
        $title = $this->input->post('todo_title');
        $insert = $this->todo_model->insert(
            array(
                "title"       => $title,
                "isComplated" => 0,
                "createdAt"   => date("Y-m-d H:i:s")
            )
        );
        if ($insert) {
            redirect(base_url());
        }
    }
}