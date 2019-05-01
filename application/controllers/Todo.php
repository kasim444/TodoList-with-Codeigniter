<?php

class Todo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // tüm todoları ekrana bastığımız alan
        $this->load->view('todo');
    }
}
