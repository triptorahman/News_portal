<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
        
    }
}
