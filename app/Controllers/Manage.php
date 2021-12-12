<?php

use Core\Controller;
use Functions\Session;

class Manage extends Controller
{
   public function index()
   {
      Session::setFlashdata('Manage');
      return $this->view("manage/index");
   }

   public function pangkalan($id = null)
   {
      Session::setFlashdata('Manage Pangkalan');

      if ( is_null($id) ) {
         return $this->view("manage/pangkalan-show");
      }

      $data = [
         'id' => $id,
      ];
   }

   public function rute($id = null)
   {
      Session::setFlashdata('Manage Rute');

      if ( is_null($id) ) {
         return $this->view("manage/rute-show");
      }

      $data = [
         'id' => $id,
      ];

      return $this->view("manage/rute-edit", $data);
   }
}