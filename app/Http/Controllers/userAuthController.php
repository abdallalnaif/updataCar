<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userAuthController extends Controller
{
    public function showLogin()
    {
        return response()->view('cms.auth.login' );
    }

    public function login(Request $request)
    {
        $rules = [
            'email' => 'required|email' ,
            'password' => 'required' ,
        ];

        $messages = [
            'email.required' => 'الايميل مطلوب' ,
            'email.email' => 'هذه ليست صيغة ايميل' ,
            'password.required' => 'رقم المرور مطلوب' ,
        ];

        $validator = Validator($request->all() , $rules , $messages);

        if(! $validator->fails()){

            $credentials = [
                'email' => $request->get('email'),
                'password' => $request->get('password'),
            ];

            if(Auth::guard('user')->attempt($credentials) ){
                return response()->json([
                    'icon' => 'success' ,
                    'title' => 'login is success',
                ] , 200);                

            }else{
                return response()->json([
                    'icon' => 'error' ,
                    'title' => 'login is failed'
                ] , 400);
            }

        }else{
            return response()->json([
                'icon' => 'error' ,
                'title' => $validator->getMessageBag()->first()
            ] , 400);
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('user')->logout();
        $request->session()->invalidate();
        return redirect()->route('login.show');
    }
}
