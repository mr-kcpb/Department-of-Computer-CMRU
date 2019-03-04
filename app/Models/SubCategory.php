<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    
    protected $table = 'sub_categories';
    protected $guarded = [];
    protected $dates = ['deleted_at'];
    
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
