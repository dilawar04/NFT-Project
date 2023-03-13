<?php

namespace App\Http\Controllers;
session_start();
use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;
use Coderjerk\BirdElephant\BirdElephant;
use Coderjerk\BirdElephant\Compose\Tweet;
use App\Models\User;
use App\Models\Accounts;
use App\Models\Tasks;
use App\Models\UserTasks;
class TwitterAuth extends Controller
{
    protected  $key= 'A5JWhIW66F9KCdPaaggd7m3c9';
    protected  $secret=  '7rFGiEorzMfiyldLYfHd2t5MHUjnKXMpM5bnSpXOq54NtIs3yn';
    protected  $bearer =  'AAAAAAAAAAAAAAAAAAAAAKAqjgEAAAAANi8PCoD6UDgOIU7ziZD7xxYs%2FMQ%3DodtljSncNZeSaArV7kd5YgoZoLaoGN6qp2DLBJbpNrYeK9p5rR';
    protected  $access_token =  '238969810-quGW1i35ARAyEExYPcqRszOC4eYFKnt9Ubs3Id48';
    protected  $access_token_secret =  'sIynqkFsOCgTtgD6jdhemhVEkhxskoL9IsvnDuSOFaH5P';
    protected $connection=NULL;
    
    public function __construct()
    {
          $this->setConnection($this->key,$this->secret); 
    }
    
    protected function setConnection($key,$secret,$access_token=null,$access_token_secret=null)
    {
        $this->connection=new TwitterOAuth($key,$secret,$access_token,$access_token_secret);
    }

    protected function getConnection()
    {
        return $this->connection;
    }

    public function Auth(Request $request)
    {
        
        
        if(!session()->has('users')){
            return redirect()->back()->with('message',['status'=>'error','msg'=>'Login First']);
        }
        $users=session()->get('users');
        $connection = $this->getConnection();//new TwitterOAuth('A5JWhIW66F9KCdPaaggd7m3c9', '7rFGiEorzMfiyldLYfHd2t5MHUjnKXMpM5bnSpXOq54NtIs3yn');
        if(isset($_REQUEST['oauth_token']) && isset($_REQUEST['oauth_verifier']) ){
            
            
            $access_token = $connection->oauth("oauth/access_token",['oauth_token'=>$_REQUEST['oauth_token'],"oauth_verifier" => $_REQUEST['oauth_verifier']]);
            $oauth_token=$access_token['oauth_token'];
            $oauth_token_secret=$access_token['oauth_token_secret'];
            $user_id=$access_token['user_id'];
            $_SESSION['oauth-2-access-token']=$oauth_token;
            $_SESSION['oauth-2-access-token_secret']=$oauth_token_secret;
            $this->setConnection($this->key,$this->secret,$oauth_token,$oauth_token_secret);
            $connection = $this->getConnection();//new TwitterOAuth('A5JWhIW66F9KCdPaaggd7m3c9', '7rFGiEorzMfiyldLYfHd2t5MHUjnKXMpM5bnSpXOq54NtIs3yn',$oauth_token,$oauth_token_secret);
            $get_user = $connection->get('account/verify_credentials');//get('users',['id' => $user_id]);
            
            $users_id=$users->id;//session()->get('user_id');
            if(Accounts::where('user_id',$users_id)->where('account_type','twitter')->exists()){
                $account=Accounts::where('user_id',$users_id)->where('account_type','twitter')->first();
                // $update_account=Accounts::find($account->id);
                $account->user_id           =   $users_id;
                $account->account_address   =   $get_user->id;
                $account->account_title     =   $get_user->screen_name;
                $account->account_type      =   "twitter";
                $account->tokens            =json_encode(['oauth_token'=>$oauth_token,"oauth_token_secret" => $oauth_token_secret]);
                $account->updated_at        =   date('Y-m-d H:i:s');
                $account->save();
                return redirect('/')->with('message',['status'=>'success','msg'=>'Twitter Connect Successfully']);
            }else{
                
                $account=new Accounts();
                $account->user_id           =   $users_id;
                $account->account_address   =   $get_user->id;
                $account->account_title     =   $get_user->screen_name;
                $account->account_type      =   "twitter";
                $account->tokens            =json_encode(['oauth_token'=>$oauth_token,"oauth_token_secret" => $oauth_token_secret]);
                $account->save();
                return redirect('/')->with('message',['status'=>'success','msg'=>'Twitter Connect Successfully']);
            }

        }else{
            $request_token = $connection->oauth("oauth/request_token");
            $oauth_token=$request_token['oauth_token'];
            $oauth_token_secret=$request_token['oauth_token_secret'];
            session()->put('oauth_token', $oauth_token);
            session()->put('oauth_token_secret', $oauth_token_secret);
            $authenticate = $connection->url("oauth/authenticate", ["oauth_token" => $oauth_token ]);
            
            return redirect($authenticate);
        }
        
        
        

    }

    
    public function follow()
    {
        
        if(!session()->has('users')){
            return redirect()->back()->with('message',['status'=>'error','msg'=>'Login First']);
        }
        $users=session()->get('users');
        $users_id=$users->id;
        
        if(!Accounts::where('user_id',$users_id)->where('account_type','twitter')->exists()){
            return redirect("/twitter-auth");
        }
        
        $account=Accounts::where('user_id',$users_id)->where('account_type','twitter')->first();
        $tokens=json_decode($account->tokens);


        $curl = curl_init();
        
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.twitter.com/2/users/'.$account->account_address.'/following',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
                "target_user_id": "238969810"
                }',
        CURLOPT_HTTPHEADER => array(
            'Authorization: OAuth oauth_consumer_key="'.$this->key.'",oauth_token="'.$tokens->oauth_token.'",oauth_signature_method="HMAC-SHA1",oauth_timestamp="1673250290",oauth_nonce="H2sVNaHK2MW",oauth_version="1.0",oauth_signature="DBYJJ3ltVQ1s%2FBQbdDyfE9Rf4FQ%3D"',
            'Content-Type: application/json',
            'Cookie: guest_id=v1%3A167301282883982414; guest_id_ads=v1%3A167301282883982414; guest_id_marketing=v1%3A167301282883982414; personalization_id="v1_ZD3d8fIac2xGbMw5Ko9y+w=="'
        ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
    
        $response=json_decode($response,true);
        
        if(isset($response['data']) && $response['data']['following']){
            $task=Tasks::where('type','twitter_follow')->where('status',1)->first();
            if(UserTasks::where('task_id',$task->id)->where('user_id',$users_id)->exists()){
                $model=UserTasks::where('task_id',$task->id)->where('user_id',$users_id)->first();
                // $model=UserTasks();
                $model->user_id     =   $users_id;
                $model->task_id     =   $task->id;
                $model->updated_at  =   date('Y-m-d H:i:s');
                $model->save();

                return redirect()->back()->with('message',['status'=>'success','msg'=>'Followed Successfully']);
            }
            $model = new UserTasks();
            $model->user_id = $users_id;
            $model->task_id = $task->id;
            $model->save();

            return redirect()->back()->with('message',['status'=>'success','msg'=>'Followed Successfully']);
        }else{
            return redirect()->back()->with('message',['status'=>'error','msg'=>'Something wents wrong, try again']);
        }

        
        
    }

    public function tweets(Request $request)
    {

        
        $credentials = array(
            //these are preset values that you can obtain from developer portal:
            'bearer_token' => $this->bearer, // OAuth 2.0 Bearer Token requests
            'consumer_key' => $this->key, // identifies your app, always needed
            'consumer_secret' => $this->secret, // app secret, always needed
        
            //this is a value created duting an OAuth 2.0 with PKCE authentication flow:
            //'auth_token'       => $_SESSION['oauth-2-access-token'] ,// OAuth 2.0 auth token
        
            //these are values created during an OAuth 1.0a authentication flow:
            'token_identifier' => $_SESSION['oauth-2-access-token'], // OAuth 1.0a User Context requests
            'token_secret' => $_SESSION['oauth-2-access-token_secret'], // OAuth 1.0a User Context requests
        );
        $twitter = new BirdElephant($credentials);

        $text=$request->text;//"Digiwised testing.";
        
       if($request->hasFile('img-file')){
        
            $file= $request->file('img-file');
        
            // first, use the tweeets()->upload method to upload your image file
            $image = $twitter->tweets()->upload($file);

            // //pass the returned media id to a media object as an array
            $media = (new \Coderjerk\BirdElephant\Compose\Media)->mediaIds(
                [
                    $image->media_id_string
                ]
            );

            // //compose the tweet and pass along the media object
            $tweet = (new \Coderjerk\BirdElephant\Compose\Tweet)->text($text)
                ->media($media);

            $twitter->tweets()->tweet($tweet);
       }else{
            $tweet = (new Tweet)->text($text)->quoteTweetId('238969810');
            $twitter->tweets()->tweet($tweet);

       }

            $users=session()->get('users');
            $task=Tasks::where('type','tweet')->where('status',1)->first();
            // if(UserTasks::where('task_id',$task->id)->where('user_id',session()->get('user_id'))->exists()){
            //     $model=UserTasks::where('task_id',$task->id)->where('user_id',session()->get('user_id'))->first();
            //     // $model=UserTasks();
            //     $model->user_id     =   session()->get('user_id');
            //     $model->task_id     =   $task->id;
            //     $model->updated_at  =   date('Y-m-d H:i:s');
            //     $model->save();

            //     return redirect()->back()->with('message',['status'=>'success','msg'=>'Followed Successfully']);
            // }
            $model = new UserTasks();
            $model->user_id = $users->id;
            $model->task_id = $task->id;
            $model->save();
        
        return redirect()->back()->with('message',['status'=>'success','msg'=>'Tweeted Successfully']);

    }

}
