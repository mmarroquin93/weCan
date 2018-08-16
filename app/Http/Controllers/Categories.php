<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Categories extends Controller
{
    //
    public function listar(){
        $categorias=Category::all();

        return view("controlpanel.categorias" , compact("categorias"));
    }

    public function addview(){



        return view("controlpanel.categoriasaddview" );
    }


    public function add(Request $request){
        $categoria=new Category();
        $categoria->nombre=$request->categoria;

        $categoria->save();

        return "ok";
    }

    public function updateview($id){

        $categoria=Category::where('id','=',$id)->first();




        return view("controlpanel.categoriasupdateview",compact('categoria') );
    }

    public function update(Request $request){

        $categoria=Category::where('id','=',$request->id)->first();

        $categoria->nombre=$request->categoria;

        $categoria->save();

        return "yey";
    }



}
