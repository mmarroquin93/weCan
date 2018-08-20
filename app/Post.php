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

}
