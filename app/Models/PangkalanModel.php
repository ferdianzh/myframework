<?php

namespace Models;

use Core\Model;

class PangkalanModel extends Model {
    public function __construct()
    {
        parent::__construct();
        
        $this->table = 'pangkalan';
        $this->field = ['id', 'nama', 'tipe', 'kordinat'];
    }
}