<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'login_test';
    protected $fillable = [
    'code',
    'pass',
    'name',
    'major',
    'telephone_num',
    'tepy',
    'position'
  ];
}

