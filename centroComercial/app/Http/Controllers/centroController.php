<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class centroController extends Controller
{
    public function index(){
        return view("centros.index");
    }
    public function zara(){
        return view("centros.zara");
    }
    public function pyb(){
        return view("centros.pyb");
    }
    public function macdonals(){
        return view("centros.macdonals");
    }
    public function nike(){
        return view("centros.nike");
    }
    public function adidas(){
        return view("centros.adidas");
    }
}
