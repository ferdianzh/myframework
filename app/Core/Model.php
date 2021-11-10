<?php

namespace Core;

class Model extends Database{
   protected $table;
   protected $field;
   protected $result;

   public function getAll()
   {
      if ( !isset($this->stmt) ) {
         $this->query("SELECT * FROM $this->table");
      }
      $this->result = $this->resultSet();
      return $this->result;
   }

   public function get()
   {
      $this->result = $this->resultSingle();
      return $this->result;
   }

   public function select($params)
   {
      $this->query("SELECT $params FROM $this->table");
      return $this;
   }

   public function where($dbColumn, $inputColumn)
   {
      $this->query("SELECT * FROM $this->table where $dbColumn = $inputColumn");
      return $this;
   }

   public function save($params)
   {
      $cols = $this->field;
      $columns = ':'.implode(', :', $this->field);

      $this->query("INSERT INTO $this->table VALUES ($columns)");
      foreach ( $cols as $col ) {
         if ( isset($params[$col]) ) {
            $this->bind($col, $params[$col]);
         } else {
            $this->bind($col, '');
         }
      }

      $this->execute();
      
      return $this->rowCount();
   }

   public function delete($id)
   {
      $this->query("DELETE FROM $this->table WHERE id= $id");
      $this->execute();

      return $this->rowCount();
   }

}