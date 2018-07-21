<?php

namespace App\Http\Controllers\Api;

use App\Model\Borrow;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class BorrowController extends BaseController
{
    public function getItem() {
        $item = Borrow::all();
        return $item;
    }

    public function postItem(Request $request)
    {
        $this->validate($request, [
            'id_borrow'=> 'required',
            'id_user' => 'required',
            'id_equipment'=> 'required',
            'amout'=> 'required',
            'unit_amout'=> 'required',
            'borrow_date'=> 'required',
            'return_day'=> 'required',
            'date_save'=> 'required',
            'b_comment_user'=> 'required',
            'b_comment_teacher'=> 'required',
            'b_check_status_t'=> 'required',
            'b_comment_scientist'=> 'required',
            'b_check_status_s'=> 'required',
            'sdentist'=> 'required',
        ]);
        $item = Borrow::create($request->all());
        return $item;
    }

    public function putItem(Request $request, $id)
    {
        $item = Borrow::find($id);
        $item->update($request->all());
        return $item;
    }

    public function deleteItem($id)
    {
        try {
            $item = Borrow::find($id);
            $item->delete();
            return "success";
        } catch (\Exception $e) {
            return "false";
        }
    }

    
}