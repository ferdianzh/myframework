<?php

use Core\Controller;
use Functions\Session;
use Models\PangkalanModel;

class Home extends Controller
{
    protected $pangkalanModel;

    public function __construct()
    {
        $this->pangkalanModel = new PangkalanModel;
    }

    public function index()
    {
        $data = [
            "pangkalan"  => $this->pangkalanModel->select('nama')->where('id', 101)->first(),
        ];

        Session::setFlashdata('Home');
        return $this->view("home/index", $data);
    }
}