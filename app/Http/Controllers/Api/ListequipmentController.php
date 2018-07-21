<?php

namespace App\Http\Controllers\Api;

use App\Model\Listequipment;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class ListequipmentController extends BaseController
{
    public function getItem() {
        $item = Listequipment::all();
        return $item;
    }

    public function postItem(Request $request)
    {
        $this->validate($request, [
            'product'=> 'required',
            'age' => 'required'
        ]);
        $item = Listequipment::create($request->all());
        return $item;
    }

    public function putItem(Request $request, $id)
    {
        $item = Listequipment::find($id);
        $item->update($request->all());
        return $item;
    }

    public function deleteItem($id)
    {
        try {
            $item = Listequipment::find($id);
            $item->delete();
            return "success";
        } catch (\Exception $e) {
            return "false";
        }
    }

    
}