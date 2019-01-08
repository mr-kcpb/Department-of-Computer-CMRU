<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    
    protected $primaryKey = 'user_id';
    
    protected $table = 'users';
    
    protected $guarded = [];
    
    protected $dates = ['deleted_at'];
}
