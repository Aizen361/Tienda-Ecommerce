<?php

namespace laravel\Http\Controllers;

use Illuminate\Http\Request;

use laravel\Http\Requests;
use laravel\RestauracionCategoria;
use Illuminate\Support\Facades\Redirect;
use laravel\Http\Requests\RestauracionCategoriaFormRequest;
use DB;

class RestauracionCategoriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   
       public function index(Request $request)
        {
       if ($request)
       {
        $query=trim($request->get('searchText'));
        $categorias=DB::table('categoria as c')
        ->join('users as u','c.id','=','u.id')
        ->select('c.idCategoria','c.nombre','u.name as users')
        ->where('c.nombre','LIKE','%'.$query.'%')
        ->where ('condicon','=','-1')
        ->orderBy('idCategoria','desc')
        ->paginate (7);
        return view('restauracion.categoria.index',["categorias"=>$categorias,"searchText"=>$query]);
       }
    }
    public function update(RestauracionCategoriaFormRequest $request,$id)
    {
         
         $categoria=RestauracionCategoria::findOrFail($id);
         $categoria->idProveedor=$request->get('idProveedor');
         $categoria->nombre=$request->get('nombre');
         $categoria->update();
         return Redirect::to('restauracion/categoria');
         
    }
      public function destroy($id)
    {
        $categoria=RestauracionCategoria::findOrFail($id);
        $categoria->condicon='0';        
        $categoria->update();
    return Redirect::to('restauracion/categoria');
    }
}
