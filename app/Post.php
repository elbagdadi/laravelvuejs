<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $casts = [
        'is_published' => 'boolean',
    ];
    public  function author(){
        return $this->belongsTo(User::class);
    }
    public  function publisher(){
        return $this->belongsTo(User::class);
    }
    public  function category(){
          return $this->belongsTo(Category::class,'cat_id');
    }
    
}
