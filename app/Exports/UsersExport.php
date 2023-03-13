<?php

namespace App\Exports;

use App\Models\User;
use App\Models\Accounts;
use Illuminate\Support\Facades\DB;


use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings; 

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        // $users = DB::table('users')->leftjoin('user_accounts','user_accounts.user_id','=','users.id')->leftjoin('user_tasks','user_tasks.user_id','=','users.id')->leftjoin('tasks','tasks.id','=','user_tasks.task_id')->selectRaw('*, users.id as uid , sum(tasks.score) as score')->groupBy('uid')->where('is_whitelisted', '=' , '1')->limit(1500)->orderBy('uid','asc')->get();
        $users = DB::table('users')->leftjoin('user_accounts','user_accounts.user_id','=','users.id')->leftjoin('user_tasks','user_tasks.user_id','=','users.id')->leftjoin('tasks','tasks.id','=','user_tasks.task_id')->selectRaw('*, users.id as uid , sum(tasks.score) as score')->groupBy('uid')->get();
        return $users;
    }
}
// class UsersExport implements FromCollection, WithHeadings
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */

//     public function headings():array{
//         return[
//             'Id',
//             'Name',
//             'Email',
//             'City',
//             'Created_at',
//             'Updated_at' 
//         ];
//     } 

//     public function collection()
//     {
//         $users = DB::table('users')->leftjoin('user_accounts','user_accounts.user_id','=','users.id')->leftjoin('user_tasks','user_tasks.user_id','=','users.id')->leftjoin('tasks','tasks.id','=','user_tasks.task_id')->selectRaw('*, users.id as uid , sum(tasks.score) as score')->groupBy('uid')->where('is_whitelisted', '=' , '1')->limit(1500)->orderBy('uid','asc')->get();
        
//         return $users;
//     }
// }
