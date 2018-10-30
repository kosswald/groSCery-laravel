<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;

/**
 * @group User Management
 *
 * APIs for managing users
 */
class UserController extends Controller 
{
public $successStatus = 200;
    
    /** 
     * Login user
     * 
     * @bodyParam email email required User's email
     * @bodyParam password string required User's password
     * 
     * @response {
     *      "success" : {
     *          "token" : "{token}"
     *      }
     * } 
     */ 
    public function login(){ 
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')->accessToken; 
            return response()->json(['success' => $success], $this->successStatus); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }

    /**
     * Logout user 
     * 
     * 
     * @response {
     *      "success" : "Token has been revoked"
     * }
     */ 
    public function logout(){
        Auth::user()->token()->revoke();
        return response()->json(['success' => 'Token has been revoked'], $this->successStatus);
    }

    /** 
     * Register new user 
     * 
     * @bodyParam name string required User's name
     * @bodyParam email email required User's email
     * @bodyParam password string required User's password 
     * @bodyParam c_password string required Confirmed password. Should match password
     * 
     * @response {
     *      "success" : {
     *          "token" : "{token}"
     *      }
     * }  
     */ 
    public function register(Request $request) 
    { 
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'email' => 'required|email', 
            'password' => 'required', 
            'c_password' => 'required|same:password', 
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        $input = $request->all(); 
        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input); 
        $success['token'] =  $user->createToken('MyApp')->accessToken; 
        $success['name'] =  $user->name;
        return response()->json(['success'=>$success], $this->successStatus); 
    }
    
    /** 
     * User details
     * 
     * Returns basic user information
     * 
     * @response {
     *      "success" : {
     *          "id" : 1,
     *          "group_id": 1,
     *          "name": "Tommy",
     *          "pic_url": "{url|null}}",
     *          "email": "tommy@usc.edu",
     *          "email_verified_at": null,
     *          "created_at": "yyyy-mm-dd hh:mm:ss",
     *          "updated_at": "yyyy-mm-dd hh:mm:ss"
     *      }
     * } 
     */ 
    public function details() 
    { 
        return response()->json(['success' => Auth::user()], $this->successStatus);
    }

    /** 
     * User items
     * 
     * Returns a user's items
     * 
     * @response {
     *      "success" : {
     *          "id" : 1
     *      }
     * } 
     */ 
    public function items() 
    { 
        return response()->json(['success' => Auth::user()->items()], $this->successStatus);
    }

}
