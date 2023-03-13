<?php

namespace App\Http\Controllers\Discord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Crypt;
use \GuzzleHttp;
use Session;
use Auth;
use App\Models\User;
use App\Models\Accounts;
use App\Models\Tasks;
use App\Models\UserTasks;

class DiscordController extends Controller
{
    protected $tokenURL = "https://discord.com/api/oauth2/token";
    protected $apiURLBase = "https://discord.com/api/users/@me";
    protected $tokenData = [
        "client_id" => NULL,
        "client_secret" => NULL,
        "grant_type" => 'client_credentials',//"authorization_code",
        "code" => NULL,
        "redirect_uri" => NULL,
        "scope" => "identify email"
    ];

    public function login(Request $request) {
       
        
        if ($request -> missing("code") && $request -> missing("access_token")) {return redirect('/dashboard')->with('message',['status'=>'success','msg'=>'Something wents wrong try again']);};

        $this -> tokenData["client_id"] = env("DISCORD_CLIENT_ID");
        $this -> tokenData["client_secret"] = env("DISCORD_CLIENT_SECRET");
        $this -> tokenData["code"] = $request -> get("code");
        $this -> tokenData["redirect_uri"] = env("DISCORD_REDIRECT_URI");

        $client = new GuzzleHttp\Client();
        
        
        
        try {
            
            $accessTokenData = $client -> post($this -> tokenURL, ["form_params" => $this -> tokenData]);
            $accessTokenData = json_decode($accessTokenData -> getBody());   
        } catch (\GuzzleHttp\Exception\ClientException $error) {
            echo $error;
            exit;
            //return redirect() -> route("index");
        };
       
        $userData = Http::withToken($accessTokenData -> access_token) -> get($this -> apiURLBase);
        
        //if ($userData -> clientError() || $userData -> serverError()) {return redirect() -> route("index");};
        
        $userData = json_decode($userData);

        // echo"<pre>";
        // print_r($userData );
        // echo"</pre>";
        // exit;
        if (Accounts::where('account_address',$userData -> id)->exists()) {
            return redirect('/dashboard')->with('message',['status'=>'success','msg'=>'Already Connected']);
        }
        $users=session()->get('users');
        $user = Accounts::updateOrCreate(
            
            [
                'user_id'=>$users->id,
                'account_address' => $userData -> id,
                'account_title' => $userData -> username,
                'account_type' =>'discord',
                //'discriminator' => $userData -> discriminator,
                // 'email' => $userData -> email,
                // 'avatar' => $userData -> avatar,
                // 'verified' => $userData -> verified,
                // 'locale' => $userData -> locale,
                // 'mfa_enabled' => $userData -> mfa_enabled,
                //'refresh_token' => $accessTokenData -> refresh_token
            ]
        );

        // Auth::login($user);

        return redirect('/dashboard')->with('message',['status'=>'success','msg'=>'Successfully connected with Discord']);
    }

    // public function logout(Request $request) {
    //     Auth::logout();
    //     $request -> session() -> invalidate();

    //     return redirect() -> route("index");
    // }
    public function follow(Request $request)
    {
        $task=Tasks::where('type','discord_follow')->where('status',1)->first();
        $users=session()->get('users');
        $model=new UserTasks();
        $model->user_id=$users->id;
        $model->task_id=$task->id;
        $model->save();

        return redirect('/dashboard')->with('message',['status'=>'success','msg'=>'Followed Successfully']);
    }
}