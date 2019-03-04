<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $guarded = [];

    protected $dates = ['deleted_at'];
    
    public function sub_category()
    {
        return $this->hasMany('App\Models\SubCategory', 'category_id');
    }
}
