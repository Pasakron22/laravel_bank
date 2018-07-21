<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Showchemical extends Model{

  protected $table = 'chemicals';
  protected $fillable = [
    'name',
    'chemical_formula',
    'brand',
    'grade',
    'size',
    'price/unit',
    'amout'
  ];
}