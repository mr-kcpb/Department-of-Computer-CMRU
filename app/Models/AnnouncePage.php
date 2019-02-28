<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class AnnouncePage extends Model
{
    
    protected $table = 'announce_pages';
    protected $guarded = [];
    protected $dates = ['deleted_at'];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
