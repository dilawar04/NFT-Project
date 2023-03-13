<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Smart_Contracts extends Model
{
    use HasFactory;

    protected $table = 'smart_contracts';
    protected $guarded = ['id','created_at','updated_at'];

}
