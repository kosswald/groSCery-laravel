<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Item;
use App\Transaction;

class TransactionController extends Controller
{
    public $successStatus = 200;

    /**
    * @OA\Post(
    *   path="/api/transactions/purchase",
    *   summary="Purchase an item and notify group",
    *   tags={"Transactions"},
    *   security={"bearer"},
    *   @OA\Response(
    *       response=200,
    *       description="Item purchased successfully",
    *       @OA\JsonContent(
    *           @OA\Property(
    *               property="success",
    *               type="string"
    *           ),
    *           example={"success": {"id":"1","group_id":"1","name":"Banana","in_stock":"1",}}
    *       )
    *   ),
    *   @OA\Response(
    *       response=400,
    *       ref="#/components/responses/400",
    *   ),
    *   @OA\Response(
    *       response=401,
    *       ref="#/components/responses/401",
    *   )
    * )
    */ 
    public function purchase() {
        $validator = Validator::make($request->all(), [ 
            'item_id' => 'required|int', 
            'price' => 'required|double',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        $input = $request->all();
        $item = Item::find($input['item_id']);
        if (!$item) {
            return response()->json(['error'=>'Item not found'], 404);
        }
        if ($item->group_id != Auth::user()->group_id){
            return response()->json(['error'=>'Unauthroized'], 401);
        }
        $tran = Transaction::create($input);
        return response()->json(['success' => $item], $this->successStatus); 
    }
}
