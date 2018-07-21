<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Listchemical extends Model{

  protected $table = 'chemicals';
  protected $fillable = [
    'name',
    'chemical_formula',
    'grade',
    'size'
   
   
  ];
}