<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;


class Posts extends Controller
{
    //
    public function add(Request $request){

    $post = new Post;
    $post->titulo= $request->titulo;
    $post->url=str_replace(' ', '-',$request->titulo);
    $post->contenido=$request->editor_content ;
    $post->descripcion=$request->descripcion ;

        $file=$request->file('image');
        Storage::disk('public')->put($file->getClientOriginalName(), file_get_contents($file));

        $post->imagenprincipal=$file->getClientOriginalName(); ;

    $post->save();

    return $request  ;

    }


    public function listar(){

        $post=Post::all() ;

        return view( 'controlpanel.blogadmin',compact("post"));

    }

    public function getpost( $titulo){

        $post = Post::where( 'url', '=', $titulo)->first();
        return view( 'single-blog',compact("post"));

//        return view(single-blog,compact('post'));
        return $post->titulo;
    }
}
