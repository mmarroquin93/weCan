<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Post extends Model
{
    use Searchable;
    //
    protected $fillable = ['titulo','contenido','url','descripcion','imagenprincipal'];

    public function toSearchableArray()
    {
        $post = $this->toArray();



        unset($post['contenido']);

        return $post;
    }


    public function tag()
    {
        return $this->belongsToMany('App\Tag', 'post_tags', 'post_id','tag_id');
    }

    public function category()
    {
        return $this->belongsToMany('App\Category', 'post_categories', 'post_id','category_id');
    }

}
