<?php

use Core\Controller;
use Functions\Session;
use Models\AngkotModel;
use Models\PangkalanModel;

class Manage extends Controller
{
   private $pangkalanModel;
   private $angkotModel;

   public function __construct()
   {
      $this->pangkalanModel = new PangkalanModel;
      $this->angkotModel = new AngkotModel;
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

   public function save($table)
   {
      $data = $_POST;

      switch ($table) {
         case "pangkalan":
            $this->pangkalanModel->insert([
               'id' => $data['id'],
               'nama' => $data['nama'],
               'tipe' => $data['tipe'],
            ]);
            
            $this->redirect('/manage/pangkalan');
            break;
         case "angkot":
            break;
         default:
            header("location:javascript://history.go(-1)");
      }
   }

   public function delete($table, $id)
   {
      switch ($table) {
         case "pangkalan":
            $this->pangkalanModel->delete($id);
            break;
         case "angkot":
            $this->angkotModel->delete($id);
            break;
         default:
            Session::setFlashdata("data tidak ditemukan");
      }
      $this->redirect('/manage/pangkalan');
   }
}