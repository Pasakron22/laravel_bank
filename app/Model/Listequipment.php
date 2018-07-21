<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Listequipment extends Model{

  protected $table = 'equipment';
  protected $fillable = [
    'name_eng', 
    'size'
   
  ];
}