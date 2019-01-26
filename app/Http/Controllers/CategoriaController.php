<?php

namespace laravel\Http\Controllers;

use Illuminate\Http\Request;

use laravel\Http\Requests;
use laravel\Categoria;
use Illuminate\Support\Facades\Redirect;
use laravel\Http\Requests\CategoriaFormRequest;
use DB;


class CategoriaController extends Controller
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
	    ->where ('condicon','=','0')
        ->orderBy('idCategoria','desc')
	->paginate (7);
        return view('almacen.categoria.index',["categorias"=>$categorias,"searchText"=>$query]);
       }
    }
    public function create ()
    {
      
      $proveedores=DB::table('users')->get();
      return view("almacen.categoria.create",["proveedores"=>$proveedores]);
    }

    public function store(CategoriaFormRequest $request)
    {
    $categoria=new Categoria;
    $categoria->id=$request->get('id');
    $categoria->nombre=$request->get('nombre');
    $categoria->save();
    return Redirect::to('almacen/categoria');
     }
     public function show($id)
     { 
 
        return view("almacen.categoria.show",["categoria"=>Categoria::findOrFail($id)]);
    }
    public function edit($id)
     { 
        $categoria=Categoria::findOrFail($id);
        $proveedores=DB::table('users')->get();
        return view("almacen.categoria.edit",["categoria"=>$categoria,"proveedores"=>$proveedores]);
    }

    public function update(CategoriaFormRequest $request,$id)
    {
         
         $categoria=Categoria::findOrFail($id);
         $categoria->id=$request->get('id');
         $categoria->nombre=$request->get('nombre');
         $categoria->update();
         return Redirect::to('almacen/categoria');
         
    }
    public function destroy($id)
    {
        $categoria=Categoria::findOrFail($id);
        $categoria->condicon='-1';        
        $categoria->update();
    return Redirect::to('almacen/categoria');
    }
}
