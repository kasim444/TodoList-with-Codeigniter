<?php

class Todo_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public $tableName = "todos";

    public function get_todos()
    {
        return $this->db->get($this->tableName)->result();
    }

    public function insert($data = array() )
    {

        return $this->db->insert($this->tableName, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->tableName, array('id' => $id));
    }
}