<?php

namespace laravel\Http\Controllers;

use Illuminate\Http\Request;

use laravel\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use laravel\Http\Requests\ProductoFormRequest;
use laravel\Producto;
use DB;


class ProductoController extends Controller
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
       	$productos=DB::table('productos as p')
        ->join('categoria as c','p.idCategoria','=','c.idCategoria')
        ->select('p.idProducto','p.nombre','p.descripcion','c.nombre as categoria','p.imagen','p.stock','p.costo_unitario','p.Unidad_de_medida')
        ->where('p.nombre','LIKE','%'.$query.'%')
       	->orderBy('idProducto','desc')
	    ->where ('condicioon','=','0') 
       	->paginate (7);
       	return view('almacen.producto.index',["productos"=>$productos,"searchText"=>$query]);
       }
       
    }
    public function create ()
    {

       
      $categorias=DB::table('categoria')->get();
      return view("almacen.producto.create",["categorias"=>$categorias]);
    }
    public function store(ProductoFormRequest $request)
    {
    $producto=new Producto;
    $producto->idCategoria=$request->get('idCategoria');
    $producto->nombre=$request->get('nombre');
    $producto->descripcion=$request->get('descripcion');
    $producto->stock=$request->get('stock');
    $producto->costo_unitario=$request->get('costo_unitario');
    $producto->Unidad_de_medida=$request->get('Unidad_de_medida');
    if(Input::hasFile('imagen')){
        $file=Input::file('imagen');
        $file->move(public_path().'/imagenes/productos/',$file->getClientOriginalName());
        $producto->imagen=$file->getClientOriginalName();
    }

    $producto->save();
    return Redirect::to('almacen/producto');
     }
     public function show($id)
     { 
    	return view("almacen.producto.show",["productos"=>Producto::findOrFail($id)]);
    }
    public function edit($id)
     { 

        $producto=Producto::findOrFail($id);
        $categorias=DB::table('categoria')->get();
    	return view("almacen.producto.edit",["producto"=>$producto,"categorias"=>$categorias]);
    }
    public function update(ProductoFormRequest $request,$id)
    {
         $producto=Producto::findOrFail($id);
         $producto->idCategoria=$request->get('idCategoria');
         $producto->nombre=$request->get('nombre');
         $producto->descripcion=$request->get('descripcion');
         $producto->stock=$request->get('stock');
         $producto->costo_unitario=$request->get('costo_unitario');
         $producto->Unidad_de_medida=$request->get('Unidad_de_medida');
         
         if(Input::hasFile('imagen')){
         $file=Input::file('imagen');
         $file->move(public_path().'/imagenes/productos/',
         $file->getClientOriginalName());
         $producto->imagen=$file->getClientOriginalName();
    }
         $producto->update();
         return Redirect::to('almacen/producto');
    }
    public function destroy($id)
    {
        $producto=Producto::findOrFail($id);
         $producto->condicioon='-1'; 
        $producto->update();
    return Redirect::to('almacen/producto');
    }
}
