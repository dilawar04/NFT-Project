<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Public_sale extends Model
{
    use HasFactory;
    protected $table = 'public_sale';
    protected $guarded = [ 'id', 'created_at',  'updated_at' ];
}
