<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Post;

class Tags extends Controller
{
    //
    public function listar(){
        $tags=Tag::all();

        return view("controlpanel.tags" , compact("tags"));
    }

    public function addview(){



        return view("controlpanel.tagsaddview" );
    }


    public function add(Request $request){
        $tags=new Tag();
        $tags->nombre=$request->tag;
        $string=$request->tag;
        $tags->url=str_replace("-", " ", $string);

        $tags->save();

        return "ok";
    }

    public function updateview($id){

        $tag =Tag::where('id','=',$id)->first();




        return view("controlpanel.tagsupdateview",compact('tag') );
    }

    public function update(Request $request){

        $tag=Tag::where('id','=',$request->id)->first();

        $tag->nombre=$request->tags;
        $string=$request->tag;
        $tag->url=str_replace("-", " ", $string);

        $tag->save();

        return "yey";
    }


    public function tagindex($url){

        $tag=Tag::where('url',$url)->first();
        $tagss=Tag::all();
        $post=Post::all()->take(3);

$categorias =Category::all();


        return view('blogtags',compact('tag','categorias','tagss','url','post'));

    }


}
