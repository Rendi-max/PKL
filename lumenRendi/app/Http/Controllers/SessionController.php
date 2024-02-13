<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
 
    // public function __construct()
    // {
    //     $this->middleware(["auth:api", ["except" => "login", "refresh", "logout"]]);
    // }


    /**
     * @param Request $request
     * @return Response
     */
    public function login(Request $request){

        // dd($request->all());
        $this->validate($request,[
            "email" => 'required|email',
            "password" => 'required'
        ]);
        
        $credentials = $request->only(['email', 'password']);
        
        if(! $token = Auth::attempt($credentials, true))
        {
            return response()->json(["message" => "invalid credentials"], 400);
        }
        return $this->_jsonResponse($token);
    }

    /**
     * @return JsonResponse
     */
    public function me(){
        return response()->json(auth()->user());
    }

    // /**
    //  * @return JsonResponse
    //  *   */
    // public function refresh(){
    //     return $this->_jsonResponse(auth()->refresh());
    // }

    /**
     * @return JsonResponse
     *   */
    public function logout(){
        auth()->logout();
        return response()->json(["message" => "Succsesfuly Logout"]);
    }

    /**
     * @param string $token
     * 
     * @return JsonResponse
     */
    protected function _jsonResponse($token){
        return response()->json([
            "acces_token"   => $token,
            "token_type"    => "bearer",
            'user'          => auth()->user(),
            
        ]);
    }
}
