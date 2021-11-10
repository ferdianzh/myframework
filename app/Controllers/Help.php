<?php

use Core\Controller;
use Functions\Session;

class Help extends Controller
{
    public function index()
    {
        Session::setFlashdata('Help');
        return $this->view("help/index");
    }
}