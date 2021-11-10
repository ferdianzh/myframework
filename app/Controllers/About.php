<?php

use Core\Controller;
use Functions\Session;

class About extends Controller
{
    public function index()
    {
        Session::setFlashdata('About');
        return $this->view("about/index");
    }
}