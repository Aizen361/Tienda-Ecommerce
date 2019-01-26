<?php

namespace laravel\Http\Controllers;

use Illuminate\Http\Request;

use laravel\Http\Requests;
use laravel\Http\Controllers\Controller;
use laravel\Producto;
use DB;

class TiendaController extends Controller
{
    public function index()
    {
    	$productos=DB::table('productos as p')->get();
    	return view('store.index',compact('productos'));
    }

    
    	
     public function show($id)
     { 
        return view("store.show",["productos"=>Producto::findOrFail($id)]);
    }
}
