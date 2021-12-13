<?php

namespace Core;

class Model extends Database{
   protected $table;
   protected $field;
   protected $result;

   public function get()
   {
      if ( !isset($this->stmt) ) {
         $this->query("SELECT * FROM $this->table");
      }
      $this->result = $this->resultSet();
      return $this->result;
   }

   public function first()
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
      if ( empty($this->stmt) ) {
         $this->query("SELECT * FROM $this->table where $dbColumn = $inputColumn");
      } else {
         $query = $this->lastQuery . strval(" where $dbColumn = $inputColumn");
         $this->query($query);
      }
      return $this;
   }

   public function insert($params)
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

   public function update($id, $params)
   {
      //
   }

   public function addGeoSpatial()
   {
      // UPDATE ... SET latitude=18, longitute=-63, geoPoint=GeomFromText('POINT(18 -63)') WHERE ...
   }

   public function delete($id)
   {
      $this->query("DELETE FROM $this->table WHERE id= $id");
      $this->execute();

      return $this->rowCount();
   }

}