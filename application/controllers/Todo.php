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

    public function delete($id)
    {
        $deleteTodo = $this->todo_model->delete($id);
        if ($deleteTodo) {
            redirect(base_url());
        }
    }

    public function isComplatedSetter($id)
    {
        $complated = ($this->input->post('complated')) ? 1 : 0;
        $this->todo_model->update($id, array(
            "isComplated" => $complated
        ));
    }
}