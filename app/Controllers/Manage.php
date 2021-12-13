<?php

use Core\Controller;
use Functions\Session;
use Models\PangkalanModel;

class Manage extends Controller
{
   public $pangkalanModel;

   public function __construct()
   {
      $this->pangkalanModel = new PangkalanModel;
   }

   public function index()
   {
      Session::setFlashdata('Manage');
      return $this->view("manage/index");
   }

   public function pangkalan($id = null)
   {
      Session::setFlashdata('Manage Pangkalan');

      if ( is_null($id) ) {
         $data = [
            'pangkalan' => $this->pangkalanModel
                           ->select('id, nama, tipe, X(kordinat) AS kordinat_x, Y(kordinat) AS kordinat_y')->get(),
         ];

         return $this->view("manage/pangkalan-show", $data);
      }

      if ( !is_numeric($id) ) {
         return $this->view("manage/pangkalan-add");
      }

      $data = [
         'pangkalan' => $this->pangkalanModel
                        ->select('id, nama, tipe, X(kordinat) AS kordinat_x, Y(kordinat) AS kordinat_y')
                        ->where('id', $id)->first(),
      ];

      return $this->view("manage/pangkalan-edit", $data);
   }

   public function angkot($id = null)
   {
      Session::setFlashdata('Manage Angkot');

      if ( is_null($id) ) {
         return $this->view("manage/angkot-show");
      }

      $data = [
         'id' => $id,
      ];

      return $this->view("manage/angkot-edit", $data);
   }
}