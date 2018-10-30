<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\User; 
use Illuminate\Support\Facades\Auth; 

/**
 * @group Group Management
 *
 * APIs for managing groups
 */
class GroupController extends Controller
{
    /**
     * Get group items 
     * 
     * Get all the group's items 
     * 
     * @response {
     *      "success" : {
     *          "id" : 1
     *      }
     * }
     */ 
    public function items() {
        return response()->json(['success' => Auth::user()->group()->items()], $this->successStatus);
    }


}
