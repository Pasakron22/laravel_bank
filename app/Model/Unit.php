<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Unit extends Model{

  protected $table = 'unit';
  protected $fillable = [
    'id_unit',
    'unit_name'
  ];
}