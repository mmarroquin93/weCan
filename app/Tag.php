<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $fillable = ['nombre' ];



    public function post()
    {
        return $this->belongsToMany('App\Post', 'post_tags', 'tag_id', 'post_id');
    }
}
