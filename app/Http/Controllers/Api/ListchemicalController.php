<?php

namespace App\Http\Controllers\Api;

use App\Model\Listchemical;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class ListchemicalController extends BaseController
{
    public function getItem() {
        $item = Listchemical::all();
        return $item;
    }

    public function postItem(Request $request)
    {
        $this->validate($request, [
            'product'=> 'required',
            'age' => 'required'
        ]);
        $item = Listchemical::create($request->all());
        return $item;
    }

    public function putItem(Request $request, $id)
    {
        $item = Listchemical::find($id);
        $item->update($request->all());
        return $item;
    }

    public function deleteItem($id)
    {
        try {
            $item = Listchemical::find($id);
            $item->delete();
            return "success";
        } catch (\Exception $e) {
            return "false";
        }
    }

    
}