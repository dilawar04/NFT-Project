<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Tasks;
use App\Models\Pre_sale;
use App\Models\Public_sale;
use App\Models\Smart_Contracts;

class AdminPagesController extends Controller
{
    public function task(){
        $task = DB::table('tasks')->get();

        return view('admin/task', ['task' => $task]);
    }
    
    public function view_task(){
        return view('admin/add_task');
    }
    


    public function add_task(Request $request){
       
        $validator = Validator::make(
        [
            'title' => 'Dayle',
            'type' => 'lamepassword',
            'score' => 'email@example.com',
            'status' => '0'
        ],
        [
        'title' => 'required',
        'type' => 'required',
        'score' => 'required',
        'status' => 'required',
        ]);
        
        if ($validator->fails()) {
        return redirect()->back()->withInput()->withErrors($validator->errors());
        }
        
        Tasks::create([
        'title' => request()->get('title'),
        'type' => request()->get('type'),
        'score' => request()->get('score'),
        'status' =>  request()->get('status'),
        ]);
        $task = DB::table('tasks')->get();
        return view('admin/task', ['task' => $task]);
    }



    public function edit($id){
        $edit_task = Tasks::find($id);
        return view('admin/edit_task')->with(compact('edit_task'));
    }

    public function update(Request $request, $id){
        $edit_task = Tasks::find($id);

        // $validator = Validator::make(
        //      [
        //     'title' => 'required',$update_task->id,
        //     'type' => 'required',$update_task->id,
        //     'score' => 'required',$update_task->id,
        //     'status' => 'required',$update_task->id,
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withInput()->withErrors($validator->errors());
        // }

        $edit_task->update([
            'title' => request()->get('title'),
            'type' => request()->get('type'),
            'score' => request()->get('score'),
            'status' => request()->get('status'),
        ]);
        // $task = DB::table('tasks')->get();
        
        return redirect('admin/task');
    }

      public function delete($id){
        $delet_tasks = Tasks::find($id);
        $delet_tasks->delete();
        return redirect('admin/task');
        }
    // pre sale work 

    public function pre_sale(){
        $pre_sale = DB::table('pre_sale')->get();
        // echo "hello";
        // echo "<pre>";
        // print_r($pre_sale);
        // echo "</pre>";
        // exit;
        return view('admin/pre_sale', ['pre_sale' => $pre_sale]);
    }

    public function view_pre_sale(){
        return view('admin/add_pre_sale');
    }

    
    public function add_pre_sale(Request $request){
       
        $validator = Validator::make(
        [
            'price' => '10',
            'max_no_allow' => '5',
            'total' => '10',
            'status' => '0',
            'remaing' => '10',
            'ends_in' => '2023-01-03 12:30:24'
        ],
        [
        'price' => 'required',
        'max_no_allow' => 'required',
        'total' => 'required',
        'status' => 'required',
        'remaing' => 'required',
        'ends_in' => 'required'
        ]);
        
        if ($validator->fails()) {
        return redirect()->back()->withInput()->withErrors($validator->errors());
        }
        
        Pre_sale::create([
        'price' => request()->get('price'),
        'max_number_allow' => request()->get('max_no_allow'),
        'total' => request()->get('total'),
        'status' =>  request()->get('status'),
        'remaing' =>  request()->get('remaing'),
        'ends_in' =>  request()->get('ends_in'),
        ]);
        return redirect('admin/pre-sale');
    }

    public function edit_pre_sale($id){
        $edit_sale = Pre_sale::find($id);
       
        return view('admin/edit_pre_sale')->with(compact('edit_sale'));
    }
    public function update_pre_sale(Request $request, $id){
        $update_sale = Pre_sale::find($id);

        // $validator = Validator::make(
        //      [
        //     'price' => 'required',$update_sale->id,
        //     'max_number_allow' => 'required',$update_sale->id,
        //     'total' => 'required',$update_sale->id,
        //     'status' => 'required',$update_sale->id,
        //     'remaing' => 'required',$update_sale->id,
        //     'ends_in' => 'required',$update_sale->id,
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withInput()->withErrors($validator->errors());
        // }

        $update_sale->update([
            'price' => request()->get('price'),
            'max_number_allow' => request()->get('max_no_allow'),
            'total' => request()->get('total'),
            'status' =>  request()->get('status'),
            'remaing' =>  request()->get('remaing'),
            'ends_in' =>  request()->get('ends_in'),
        ]);
        // $task = DB::table('tasks')->get();
        
        return redirect('admin/pre-sale');
    }
    public function delete_pre_sale($id){
      
        $delete_sale = Pre_sale::find($id);
       
        $delete_sale->delete();
        return redirect('admin/pre-sale');
        }
    // pre sale work 

    // public sale work
    public function public_sale(){
        $pub_sale = DB::table('public_sale')->get();
        
        return view('admin/public_sale', ['pub_sale' => $pub_sale]);
    }

    public function view_public_sale(){

        return view('admin/add_public_sale');
    }


    public function add_pub_sale(Request $request){
       
        $validator = Validator::make(
        [
            'price' => '10',
            'max_no_allow' => '5',
            'total' => '10',
            'status' => '0',
            'remaing' => '10',
            'is_whitelisted' => '0',
            'ends_in' => '2023-01-03 12:30:24'
        ],
        [
        'price' => 'required',
        'max_no_allow' => 'required',
        'total' => 'required',
        'status' => 'required',
        'remaing' => 'required',
        'is_whitelisted' => 'required',
        'ends_in' => 'required'
        ]);
        
        if ($validator->fails()) {
        return redirect()->back()->withInput()->withErrors($validator->errors());
        }
        
        Public_sale::create([
        'price' => request()->get('price'),
        'max_number_allow' => request()->get('max_no_allow'),
        'total' => request()->get('total'),
        'status' =>  request()->get('status'),
        'remaing' =>  request()->get('remaing'),
        'is_whitelisted' =>  request()->get('is_whitelisted'),
        'ends_in' =>  request()->get('ends_in'),
        ]);
        return redirect('admin/public-sale');
    }

    public function edit_pub_sale($id){
        $edit_pub_sale = Public_sale::find($id);
    //    echo "hello";
    //     echo "<pre>";
    //     print_r($edit_pub_sale);
    //     echo "</pre>";
        // exit;
        return view('admin/edit_pub_sale')->with(compact('edit_pub_sale'));
    }
    public function update_pub_sale(Request $request, $id){
        $update_pub_sale = Public_sale::find($id);
       
        $update_pub_sale->update([
            'price' => request()->get('price'),
            'max_number_allow' => request()->get('max_no_allow'),
            'total' => request()->get('total'),
            'status' =>  request()->get('status'),
            'remaing' =>  request()->get('remaing'),
            'allow_whitelist' =>  request()->get('allow_whitelist'),
            'ends_in' =>  request()->get('ends_in'),
        ]);
        
        return redirect('admin/public-sale');
    }
   
        public function update_list(Request $request, $id){
       
            $update_pub_sale = Public_sale::find($id);
          $update_pub_sale->allow_whitelist= request()->get('selectbox1_selectedvalue');
          $update_pub_sale->save();
           
            $data['status']='success';
            $data['msg']='';
            return json_encode($data);
        }
        public function delete_pub_sale($id){
      
            $delete_pub = Public_sale::find($id);
          
            $delete_pub->delete();
            return redirect('admin/public-sale');
            }
    // public sale work

    // attach-file work
    // public function attach_file(){
    //     $pub_sale = DB::table('public_sale')->get();
        
    //     return view('admin/public_sale', ['pub_sale' => $pub_sale]);
    // }

    public function attach_file_add(){
        $data = User::select('id','name')->where('is_whitelisted', '=' , '1')->orderBy('id','asc')->get();
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // exit;
        return view('admin/attach_file')->with(compact('data'));
    }


    public function add_attach_file(Request $request){
       
       
        $validator = Validator::make(
        [
            'id' => '0',
            'user' => 'user',
            'file' => 'file'
        ],
          
        [
        'user' => 'required',
        'file' => 'required'
        
        ]);
              echo "<pre>";
        print_r($validator);
        echo "</pre>";
        exit;
        if ($validator->fails()) {
        return redirect()->back()->withInput()->withErrors($validator->errors());
        }
        
        // Public_sale::create([
        // 'price' => request()->get('price'),
        // 'max_number_allow' => request()->get('max_no_allow'),
        // 'total' => request()->get('total'),
        // 'status' =>  request()->get('status'),
        // 'remaing' =>  request()->get('remaing'),
        // 'is_whitelisted' =>  request()->get('is_whitelisted'),
        // 'ends_in' =>  request()->get('ends_in'),
        // ]);
        return redirect('admin/attach_file');
    }
    // attach-file work

    public function smart_contract(){
       
        if(Smart_Contracts::find(1)->exists()){
            $smart_contracts = Smart_Contracts::where('id',1)->first();
        }else{
            $smart_contracts = '';
        }
        
        // echo "<pre>";
        // print_r($smart_contracts);
        // echo "</pre>";
        // exit;
        return view('admin/smart_contract/index')->with(compact('smart_contracts'));
    }
    public function update_contract(Request $request, $id){
       
        $update_contract = Smart_Contracts::find($id);
echo "<pre>";
        print_r($update_contract);
        echo "</pre>";
        exit;

      $update_contract->checkbox= request()->get('selectbox1_selectedvalue');
      $update_contract->save();
       
        $data['status']='success';
        $data['msg']='';
        return json_encode($data);
    }




    public function smart_contract_add()
    {
        return view('admin/smart_contract/add');
    }

    public function smart_contract_store()
    {
        Console::info('hello yasin'); 
        $validator = Validator::make(\request()->all(), [
            'contract_title' => 'required|max:255|unique:smart_contracts,contract_title',
            'is_smart_contract' => 'required|max:1',
            'contract_time' => 'required',
            'eth_address' => 'required|max:255|unique:smart_contracts,eth_address',
            'wallet_balance' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        Smart_Contracts::create([
            'contract_title' => request()->get('contract_title'),
            'is_smart_contract' => request()->get('is_smart_contract'),
            'contract_time' => request()->get('contract_time'),
            'eth_address' => request()->get('eth_address'),
            'wallet_balance' => request()->get('wallet_balance'),
        ]);

        return redirect('admin/smart-contract');

    }

    public function smart_contract_edit($id){
        $smart_contract = Smart_Contracts::find($id);
        return view('admin/smart_contract/edit')->with(compact('smart_contract'));
    }
    public function smart_contract_update(Request $request, $id){
        $smart_contracts = Smart_Contracts::find($id);
        // $validator = Validator::make(\request()->all(), [
        //     'contract_title' => 'required|max:255|unique:smart_contracts,contract_title,'.$smart_contracts->id,
        //     'is_smart_contract' => 'required|max:1',
        //     'contract_time' => 'required',
        //     'eth_address' => 'required|max:255|unique:smart_contracts,eth_address,'.$smart_contracts->id,
        //     'wallet_balance' => 'required|max:255',
        // ]);

        $smart_contracts->update([
            'contract_title' => request()->get('contract_title'),
            'is_smart_contract' => request()->get('is_smart_contract'),
            'contract_time' => request()->get('contract_time'),
            'eth_address' => request()->get('eth_address'),
            'wallet_balance' => request()->get('wallet_balance'),
        ]);
        return redirect('admin/smart-contract');
    }
    public function smart_contract_destroy($id)
    {
        $smart_contract = Smart_Contracts::find($id);
        $smart_contract->delete();
        return redirect('/admin/smart-contract');
    }
    public function smart_contract_edit_ajax(Request $request, $id){
        
        $smart_contracts = Smart_Contracts::find($id);
        $smart_contracts->is_smart_contract = request()->get('selectbox2_selectedvalue');
        $smart_contracts->save();
        $data['status']='success';
        $data['msg']='';
        return json_encode($data);
    }
    


}
