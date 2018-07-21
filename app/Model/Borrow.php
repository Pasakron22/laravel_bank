<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Borrow extends Model{

  protected $table = 'borrow';
  protected $fillable = [
    'id_borrow',
    'id_user',
    'id_equipment',
    'amout',
    'unit_amout',
    'borrow_date',
    'return_day',
    'date_save',
    'b_comment_user',
    'b_comment_teacher',
    'b_check_status_t',
    'b_comment_scientist',
    'b_check_status_s',
    'sdentist',
    
  ];
}