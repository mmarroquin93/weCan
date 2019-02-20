<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\CategoriaProductos;

class Tienda extends Controller
{
    //

    public function listar(){

        $productos=Productos::all()->sortBy("id_categoria");;
        $categorias = CategoriaProductos::all();

        return view('shop',compact('productos','categorias'));
    }
}
