<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    
    protected $table = 'calendars';
    protected $guarded = [];
    protected $dates = ['deleted_at'];
    
    protected $casts
        = [
            'date_start' => 'date',
            'date_end'   => 'date',
        ];
    
    public static function boot()
    {
        parent::boot();
        
        static::creating(function ($calendar) {
            $calendar->user_id = auth()->user()->id;
        });
    }
    
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
