<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use App\Http\Requests;

class productoController extends Controller
{
    public function vista(){
        return view('/','\resources\views\Agregar');
    }
    public function create(Request $request){
        $producto = new producto();

        $producto -> nombre = $request -> nombreT;
        $producto -> descripcion = $request -> descripcion;
        $producto -> imagen = $request -> imagen;
        $producto -> stock = $request -> stock;
        $producto -> precio = $request -> precio;
        $producto -> enlace= $request -> enlace;
        $producto -> save();

        return redirect('/create');
    }
}
