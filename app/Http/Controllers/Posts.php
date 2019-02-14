<?php

namespace App\Http\Controllers;

use App\Category;
use App\post_tag;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;


class Posts extends Controller
{
    //
    public function add(Request $request){

    $post = new Post;
    $post->titulo= $request->titulo;
    $post->url=str_replace(' ', '-',$request->titulo);
    $post->contenido=$request->editorsito;
    $post->descripcion=$request->descripcion ;

        $file=$request->imagen;
        Storage::disk('public')->put($file->getClientOriginalName(), file_get_contents($file));

        $post->imagenprincipal=$file->getClientOriginalName();

        $post->contenido;



        $post->save();

//        foreach ( as $tags){

//
//        }

        for ($x = 0; $x < count($request->tag); $x++) {

//

            $category = Tag::find($request->tag[$x]);
            $post->tag()->attach($category);





        }




    return $request  ;

    }


    public function addshow(){


        $tags = Tag::all();
        $categorias = Category::all();


            return view('controlpanel.newpost',compact('tags','categorias'));

    }

    public function listar(){

        $post=Post::all();


        return view( 'controlpanel.blogadmin',compact("post"));



    }

    public function getpost( $titulo){

        $post = Post::where( 'url', '=', $titulo)->first();
        $postes=Post::all()->take(3);
        $tags = Tag::all();

        return view( 'single-blog',compact("post",'postes','tags'));


    }


    public function postsblog(){


        $post=Post::paginate(2);
        $postes=Post::all()->take(3);
        $categorias=Category::all();
        $tagss=Tag::all();

        return view('blog',compact('post',"categorias","tagss",'postes'));
    }




}
