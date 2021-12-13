<?php

use Core\Controller;
use Functions\Session;
use Models\AngkotModel;
use Models\PangkalanModel;

class Home extends Controller
{
    protected $pangkalanModel;
    protected $angkotModel;

    public function __construct()
    {
        $this->pangkalanModel = new PangkalanModel;
        $this->angkotModel = new AngkotModel;
    }

    public function index()
    {
        $data = [
            'pangkalan' => $this->pangkalanModel
                           ->select('id, nama, tipe, X(kordinat) AS kordinat_x, Y(kordinat) AS kordinat_y')->get(),
            'angkot' => $this->angkotModel->get(),
        ];

        Session::setFlashdata('Home');
        return $this->view("home/index", $data);
    }
}