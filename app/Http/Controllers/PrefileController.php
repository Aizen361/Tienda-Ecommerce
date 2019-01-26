<?php

namespace laravel\Http\Controllers;

use Illuminate\Http\Request;
use laravel\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Flash;
use laravel\User;
use DB;

class PrefileController extends Controller
{   //Metodo de Autenticacion Laravel
    public function __construct()
      {
        $this->middleware('auth');
      }
       //Funcion para mostrar datos de una tabla 
      public function show(){
        return view('Perfil.show');
      }
       //Funcion para Editar
       public function edit(){
       $usuario = User::find(Auth::User()->id);
       return view('Perfil.edit',["usuario"=>$usuario]);
    }
       //Funcion para Actualizar datos en una tabla 
        public function update(Request $request,$id){
        $usuario = User::find(Auth::User()->id);
        $usuario->name=$request->get('name');
        $usuario->calle=$request->get('calle');
        $usuario->no=$request->get('no');
        $usuario->colonia=$request->get('colonia');
        $usuario->municipio=$request->get('municipio');
        $usuario->estado=$request->get('estado');
        $usuario->cp=$request->get('cp');
        $usuario->email=$request->get('email');
        $usuario->telefono=$request->get('telefono');
        $usuario->update();
        return Redirect::to('Perfil/show');   
    }
   
}
