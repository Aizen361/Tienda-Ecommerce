<?php

namespace laravel\Http\Controllers;

use Illuminate\Http\Request;

use laravel\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use laravel\Http\Requests\RestauracionProductoFormRequest;
use laravel\RestauracionProducto;
use DB;


class RestauracionProductoController extends Controller
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
        ->select('p.idProducto','p.nombre','p.descripcion','c.nombre as categoria','p.imagen','p.stock','p.costo_unitario','p.unidad_de_medida')
        ->where('p.nombre','LIKE','%'.$query.'%')
       	->orderBy('idProducto','desc')
	      ->where ('condicioon','=','-1') 
       	->paginate (7);
       	return view('restauracion.producto.index',["productos"=>$productos,"searchText"=>$query]);
       }
     
    }
    public function update(RestauracionProductoFormRequest $request,$id)
    {
         $producto=RestauracionProducto::findOrFail($id);
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
         return Redirect::to('restauracion/producto');
    }
    public function destroy($id)
    {
        $producto=RestauracionProducto::findOrFail($id);
         $producto->condicioon='0'; 
        $producto->update();
    return Redirect::to('restauracion/producto');
    }
}
