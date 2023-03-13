<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

use Illuminate\Support\Facades\Log;
class loginController extends Controller
{
 
    public function login(Request $request)
    {
        # code...
        $email=$request->input('email');
        $password=$request->input('password');
        $login=DB::table('users')->where('email',$email)->first();
        if(empty($login)){
            return redirect()->back()->with('message',['status'=>'error','msg'=>'Invail Email']);
        }
        if(Hash::check($password, $login->password)){
            session()->put('users',$login);

            return redirect()->back()->with('message',['status'=>'success','msg'=>'Login Success']);
        }else{
            return redirect()->back()->with('message',['status'=>'error','msg'=>'Invail Password']);
        }
        


    }

    public function register(Request $request)
    {
        if($request->input('password')!=$request->input('password_confirmation')){
            return redirect()->back()->with('message',['status'=>'error','msg'=>'Password and Confirmation Password Not Matched']);
        }
        $email=$request->input('email');
        $password=$request->input('password');
        $login=DB::table('users')->where('email',$email)->first();
        if(!empty($login)){
            return redirect()->back()->with('message',['status'=>'error','msg'=>'Email Already Exits Please Login']); 
        }
        User::create([
            'name' => $request->input('name'),
            'email' => $email,
            'password' => Hash::make($password),
            'role' => 1,
        ]);

        $login=DB::table('users')->where('email',$email)->first();
        // print_r($login);
        // exit;
        session()->put('users',$login);

        return redirect()->back()->with('message',['status'=>'success','msg'=>'Login Success']);

    }
    public function logout()
    {
        auth()->logout();
        session()->forget('users');
        session()->forget('login_nonce');
        return redirect('/')->with('message',['status'=>'success','msg'=>'logout Successfully']);
    }
}
