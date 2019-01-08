<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    
    protected $primaryKey = 'permission_id';
    
    protected $table = 'permissions';
    
    protected $guarded = [];
    
    public $timestamps = false;
}
