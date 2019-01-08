<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    
    protected $primaryKey = 'user_id';
    
    protected $table = 'users';
    
    protected $guarded = [];
    
    protected $dates = ['deleted_at'];
    
    public function prefix()
    {
        return $this->belongsTo('App\Models\Prefixes', 'prefix_id');
    }
    
    public function getFullName()
    {
        return $this->attributes['first_name'] . ' '
            . $this->attributes['last_name'];
    }
}
