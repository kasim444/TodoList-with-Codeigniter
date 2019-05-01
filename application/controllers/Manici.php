<?php

class Manici extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo 'manici controllerındayız';
    }

    public function insert()
    {
        echo 'manici controllerının insert metodundayız';
    }
}
