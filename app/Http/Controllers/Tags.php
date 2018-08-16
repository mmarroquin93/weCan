<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

        $tag->save();

        return "yey";
    }
}
