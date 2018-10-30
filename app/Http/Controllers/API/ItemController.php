<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\User; 
use Illuminate\Support\Facades\Auth; 
use App\Item;

/**
 * @group Item Management
 *
 * APIs for managing items
 */
class ItemController extends Controller
{
    /**
     * Sets given item in stock
     */
    public function inStock($item_id) {
        $item = Item::findOrFail($item_id);
        if (!$item) {
            return response()->json(['error'=>'Item not found'], 404);
        }
        if ($item->group_id != Auth::user()->group_id){
            return response()->json(['error'=>'Unauthroized item'], 401);
        }
        $item->in_stock = true;
        $item->save();
        return response()->json(['success'=>'Item marked in stock'], 200);
    }

    /**
     * Sets given item out of stock
     */
    public function outOfStock($item_id) {
        $item = Item::find($item_id);
        if (!$item) {
            return response()->json(['error'=>'Item not found'], 404);
        }
        if ($item->group_id != Auth::user()->group_id){
            return response()->json(['error'=>'Unauthroized item'], 401);
        }
        $item->in_stock = false;
        $item->save();
        return response()->json(['success'=>'Item marked out of stock'], 200);
    }

    /** 
     * Add new item
     */ 
    public function add(Request $request) 
    { 
        $validator = Validator::make($request->all(), [ 
            'group_id' => 'required|string', 
            'in_stock' => 'required|boolean', 
            'name' => 'required|string', 
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        $input = $request->all(); 
        $item = Item::create($input); 
        $success['success'] =  $item;
        return response()->json(['success'=>$success], $this->successStatus); 
    }
}
