<?php

namespace App\Http\Controllers;

use App\CategoriaProductos;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Categoriesproducto extends Controller
{
    //
    public function listar(){
        $categorias=CategoriaProductos::all();

        return view("controlpanel.categoriasproducto" , compact("categorias"));
    }

    public function addview(){



        return view("controlpanel.categoriasproductoaddview" );
    }


    public function add(Request $request){
        $categoria=new CategoriaProductos();
        $categoria->nombre=$request->categoria;
        $string=$request->categoria;
        $categoria->url=str_replace("-", " ", $string);

        $categoria->save();

        return "ok";
    }

    public function updateview($id){

        $categoria=CategoriaProductos::where('id','=',$id)->first();




        return view("controlpanel.categoriasproductoupdateview",compact('categoria') );
    }

    public function update(Request $request){

        $categoria=CategoriaProductos::where('id','=',$request->id)->first();

        $categoria->nombre=$request->categoria;

        $categoria->save();

        return "yey";
    }


    public function categoryindex($url){

        $tag=CategoriaProductos::where('url',$url)->first();
        $tagss=Tag::all();
        $post=Post::all()->take(3);

        $categorias =Category::all();


        return view('blogcategory',compact('tag','categorias','tagss','url','post'));

    }


}
