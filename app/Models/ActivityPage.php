<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivityPage extends Model
{
    
    use SoftDeletes;
    
    protected $table = 'activity_pages';
    protected $guarded = [];
    protected $dates = ['deleted_at'];
    
    public static function boot()
    {
        parent::boot();
        
        static::creating(function ($activity) {
            if (auth()->check()) {
                $activity->user_id = auth()->user()->id;
            }
        });
    }
    
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->addYear(543)->format('d/m/Y');
    }
    
    public function shortTitle()
    {
        return str_limit(strip_tags($this->attributes['title']), 50);
    }
    
    public function shortDetail()
    {
        return str_limit(strip_tags($this->attributes['detail']), 150);
    }
}
