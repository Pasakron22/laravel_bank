<?php

namespace App\Http\Controllers\Api;

use App\Model\Showequipment;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class ShowequipmentController extends BaseController
{
    public function getItem() {
        $item = Showequipment::all();
        return $item;
    }

    public function postItem(Request $request)
    {
        $this->validate($request, [
            'product'=> 'required',
            'age' => 'required'
        ]);
        $item = Showequipment::create($request->all());
        return $item;
    }

    public function putItem(Request $request, $id)
    {
        $item = Showequipment::find($id);
        $item->update($request->all());
        return $item;
    }

    public function deleteItem($id)
    {
        try {
            $item = Showequipment::find($id);
            $item->delete();
            return "success";
        } catch (\Exception $e) {
            return "false";
        }
    }

    
}