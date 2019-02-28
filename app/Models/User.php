<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    
    protected $table = 'users';
    protected $guarded = [];
    protected $dates = ['deleted_at'];
    
    public function prefix()
    {
        return $this->belongsTo('App\Models\Prefix', 'prefix_id');
    }
    
    public function getFullName()
    {
        return $this->attributes['first_name'] . ' '
               . $this->attributes['last_name'];
    }
    
    public function image()
    {
        return asset(
            'storage/personnel/' . $this->attributes['id'] . '.jpg'
        );
    }
}
