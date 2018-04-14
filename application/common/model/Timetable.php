<?php

namespace app\Common\model;

use think\Model;

class Timetable extends Model
{
     protected $pk='table_id';
     protected $table='lo_table';
      public function index($data){
     
      return $data;
          
        
    }

    
}
