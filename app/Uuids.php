<?php

namespace App;

use Webpatser\Uuid\Uuid;

trait Uuids
{

    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            empty($post->{$post->getKeyName()}) && $post->{$post->getKeyName()} = (string)Str::uuid();
        });
    }
}