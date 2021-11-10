<?php

namespace Functions;

class Session
{
   public function __construct()
   {
      session_start();
   }

   public static function getFlashdata() {
      if (!isset($_SESSION['flashdata'])) {
         return null;
      }
      $flashdata = $_SESSION['flashdata'];
      unset($_SESSION['flashdata']);
      return $flashdata;
   }

   public static function setFlashdata($value) {
      if (!isset($_SESSION['flashdata'])) {
         $_SESSION['flashdata'] = array();
      }
      $_SESSION['flashdata'] = $value;
   }
}