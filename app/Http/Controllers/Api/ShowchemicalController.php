<?php

namespace App\Http\Controllers\Api;

use App\Model\Showchemical;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class ShowchemicalController extends BaseController
{
    public function getItem() {
        $item = Showchemical::all();
        return $item;
    }

    public function postItem(Request $request)
    {
        $this->validate($request, [
            'product'=> 'required',
            'age' => 'required'
        ]);
        $item = Showchemical::create($request->all());
        return $item;
    }

    public function putItem(Request $request, $id)
    {
        $item = Showchemical::find($id);
        $item->update($request->all());
        return $item;
    }

    public function deleteItem($id)
    {
        try {
            $item = Showchemical::find($id);
            $item->delete();
            return "success";
        } catch (\Exception $e) {
            return "false";
        }
    }

    
}