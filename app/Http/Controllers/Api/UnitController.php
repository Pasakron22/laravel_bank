<?php

namespace App\Http\Controllers\Api;

use App\Model\Unit;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;


class UnitController extends BaseController
{
    public function getItem() {
        $item = Unit::all();
        return $item;
    }
}