<?php

namespace App\Http\Controllers\Admin;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Carbon\Carbon;



use App\Models\User;
use App\Models\Accounts;
use App\Models\Tasks;

class AdminController extends Controller
{
    public function index(){
        $accounts = Accounts::get();
        $users = User::get();
        return view('admin/index')->with(compact('users','accounts'));
    }
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    // pdf download work 
    public function downloadTxt()
    {
      $txt = "";
      $datas = User::select('id','eth_address')->where('is_whitelisted', '=' , '1')->orderBy('id','asc')->get();
                
      $txt .= 'ID | Address'.PHP_EOL;
      foreach($datas as $data){
        $txt .= $data['id'].'|'.$data['eth_address'].PHP_EOL;
      }
      $txtname = 'mytxt.txt';
         $headers = ['Content-type'=>'text/plain', 'test'=>'YoYo', 'Content-Disposition'=>sprintf('attachment; filename="%s"', $txtname),'X-BooYAH'=>'WorkyWorky','Content-Length'=>sizeof($datas)];
        
            return \Response::make($txt , 200, $headers );
    
    }

    // pdf download work 




    

    public function whitelist_add(){

        $users = DB::table('users')->leftjoin('user_tasks','user_tasks.user_id','=','users.id')->leftjoin('tasks','tasks.id','=','user_tasks.task_id')->selectRaw('*, users.id as uid , sum(tasks.score) as score, users.status as status')->where('role',1)->groupBy('uid')->orderBy('uid','asc')->get();
        
        return view('admin/white_list_add')->with(compact('users'));
    }
    public function one_thousand(){

        $users = DB::table('users')->leftjoin('user_accounts','user_accounts.user_id','=','users.id')->leftjoin('user_tasks','user_tasks.user_id','=','users.id')->leftjoin('tasks','tasks.id','=','user_tasks.task_id')->selectRaw('*, users.id as uid , sum(tasks.score) as score')->groupBy('uid')->limit(1000)->orderBy('uid','asc')->get()->take(-100);
        return view('admin/white_list_add')->with(compact('users'));

      
    }

    public function five_hundred(){

        $users = DB::table('users')->leftjoin('user_accounts','user_accounts.user_id','=','users.id')->leftjoin('user_tasks','user_tasks.user_id','=','users.id')->leftjoin('tasks','tasks.id','=','user_tasks.task_id')->selectRaw('*, users.id as uid , sum(tasks.score) as score')->groupBy('uid')->limit(500)->orderBy('uid','asc')->get(500);
        return view('admin/white_list_add')->with(compact('users'));

    }

    public function edit(Request $request, $id){
        
        $users = DB::table('users')->leftjoin('user_accounts','user_accounts.user_id','=','users.id')->leftjoin('user_tasks','user_tasks.user_id','=','users.id')->leftjoin('tasks','tasks.id','=','user_tasks.task_id')->selectRaw('*, users.id as uid , sum(tasks.score) as score')->groupBy('uid')->where('users.id',$id)->first();
        
        
        return view('admin/edit_whitelist')->with(compact('users'));
    }

    public function update(Request $request, $id){
        
        
        $users = User::find($id);
        
        $users->update([
            'name' => request()->get('name'),
            'email' => request()->get('email'),
            'status' => request()->get('status'),
           
            'is_whitelisted' => request()->get('is_whitelisted'),
        ]);
 
        $accounts = Accounts::find($id);
        $users->update([
            'account_address' => request()->get('account_address'),
            'account_title' => request()->get('account_title'),
            'account_type' => request()->get('account_type'),
        ]);

               return redirect('/admin');
        
    }
    public function update_list(Request $request, $id){
       
        $users = User::find($id);
    
      $users->is_whitelisted= request()->get('selectbox1_selectedvalue');
      $users->save();
       
        $data['status']='success';
        $data['msg']='';
        return json_encode($data);
    }

      public function deletes($id){

        $delete_list = DB::table('users')->leftjoin('user_accounts','user_accounts.user_id','=','users.id')->leftjoin('user_tasks','user_tasks.user_id','=','users.id')->leftjoin('tasks','tasks.id','=','user_tasks.task_id')->selectRaw('*, users.id as uid , sum(tasks.score) as score')->groupBy('uid')->where('users.id',$id)->delete();
        
        return redirect('admin/whitelist-user-add');
        }
            // attach smart contract
            public function attach_smart_cont(){
                $data = User::select('id','name')->where('is_whitelisted', '=' , '1')->where('is_smart', '=' , '1')->orderBy('id','asc')->get();
               
                return view('admin/attach_smart_contract')->with(compact('data'));
            }

            public function add_attach_smart_cont(Request $request){
               
                $data = request()->validate([
                
                'id' => ['required', 'max:255'],
                'user' => ['required', 'max:255'],
                'file' => ['required', 'max:255']
                ]);
              
                // if ($data->fails()) {
                // return redirect()->back()->withInput()->withErrors($data->errors());
                // }
                auth()->user()->id()->create($data + ['post_id' => $post->id]);
                 echo "<pre>";
                print_r($data);
                echo "</pre>";
                exit;
                // user::create([
                // 'user' => request()->get('user'),
                // 'file' => request()->get('file'),
                
                // ]);
                // return redirect('admin/attach_smart_contract');
            }
               // attach smart contract
}
