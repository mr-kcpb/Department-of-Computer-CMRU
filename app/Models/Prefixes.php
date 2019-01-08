<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prefixes extends Model
{
    
    protected $primaryKey = 'prefix_id';
    
    protected $table = 'prefixes';
    
    protected $guarded = [];
    
    public $timestamps = false;
}
