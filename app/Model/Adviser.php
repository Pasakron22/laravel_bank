<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Adviser extends Model{

  protected $table = 'adviser';
  protected $fillable = [
    'id_adviser',
    'name'
    
  ];
}