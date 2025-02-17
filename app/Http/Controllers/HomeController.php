<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth; use DB;
class HomeController extends Controller
{
    public function login_check (Request $request)
    {
         
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $email = $request->email;
        $password = $request->password;

        
        if(Auth::guard('web')->attempt(['email'=>$email, 'password'=>$password]))
        {    
            auth()->guard('web')->user()->user_code; 
            return redirect('home');
        }
        else {
            return back()->with([
                'message'=> trans('auth.failed'),
            ]);
        } 
    }

    public function register(Request $request)

    {
        $request->validate([
            'email'=>'required|unique:users', 
            'password'=>'confirmed|min:5',
        ]);
        $username = $request->name;
        $email = $request->email;
        $password = $request->password;

        $data = [
            'name'=>$username,
            'email'=>$email,
            'password'=>bcrypt($password),
        ];

        $result = DB::table('users')->insert($data);

        if($result){
            return back()->with('message', trans('auth.register'));
        }
        else {
            return back()->with('message', trans('auth.registerError'));
        }
    }
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/'); 
    }
}
