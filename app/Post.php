<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $incrementing = false;
    use Uuids;
    protected $fillable = [
        'created_by', 'published_by','title','text','image'
    ];

    public  function author(){
        return $this->belongsTo(User::class);
    }
    public  function publisher(){
        return $this->belongsTo(User::class);
    }
    
    
}
