<?php

namespace App\Http\Controllers\Api;

use App\Model\Adviser;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class AdviserController extends BaseController
{
    public function getItem() {
        $item = Adviser::all();
        return $item;
    }

    public function postItem(Request $request)
    {
        $this->validate($request, [
            'product'=> 'required',
            'age' => 'required'
        ]);
        $item = Adviser::create($request->all());
        return $item;
    }

    public function putItem(Request $request, $id)
    {
        $item = Adviser::find($id);
        $item->update($request->all());
        return $item;
    }

    public function deleteItem($id)
    {
        try {
            $item = Adviser::find($id);
            $item->delete();
            return "success";
        } catch (\Exception $e) {
            return "false";
        }
    }

    
}