<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Showequipment extends Model{

  protected $table = 'equipment';
  protected $fillable = [
    'id_equipment',
    'name_eng',
    'name_th',
    'brand',
    'size',
    'price/unit',
    'amout'
  ];
}