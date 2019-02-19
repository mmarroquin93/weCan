<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoriaProductos;
use App\Productos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class Producto extends Controller
{
    //


    public function addshow(){


        $categoria = CategoriaProductos::all();

        return view('controlpanel.newproducto',compact('categoria'));
    }

    public function add(Request $request){

        $post = new Productos;
        $post->nombre= $request->titulo;
        $post->url=str_replace(' ', '-',$request->titulo);
        $post->descripcion=$request->descripcion;
        $post->descripcionlarga=$request->editorsito ;

        $file=$request->imagen;
        Storage::disk('public')->put($file->getClientOriginalName(), file_get_contents($file));

        $post->imagen=$file->getClientOriginalName();

        for ($x = 0; $x < count($request->categoria); $x++) {

            $post->id_categoria=$request->categoria[$x];
        }


        $post->save();




        return $request  ;
    }
}
