<?php

namespace laravel\Http\Controllers;

use Illuminate\Http\Request;

use laravel\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use laravel\Http\Requests\RestauracioProveedorFormRequest;
use laravel\Proveedor;
use laravel\RestauracionProveedor;
use DB;
use Session;



class RestauracionProveedorController extends Controller
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
        $proveedores=DB::table('proveedor')
        ->where('nombre','LIKE','%'.$query.'%')
	->where ('condicion','=','-1')
        ->orderBy('idProveedor','desc')
        ->paginate (7);
        return view('restauracion.proveedor.index',["proveedores"=>$proveedores,"searchText"=>$query]);
       }
   }
    }
    public function update(ProveedorFormRequest $request,$id)
    {
         
        $proveedor=Proveedor::findOrFail($id);
        $proveedor->nombre=$request->get('nombre');
        $proveedor->calle=$request->get('calle');
        $proveedor->no=$request->get('no');
        $proveedor->colonia=$request->get('colonia');
        $proveedor->municipio=$request->get('municipio');
        $proveedor->estado=$request->get('estado');
        $proveedor->cp=$request->get('cp');
        $proveedor->correo=$request->get('correo');
        $proveedor->password=$request->get('password');
        $proveedor->telefono=$request->get('telefono');
 
         $proveedor->update();
         return Redirect::to('restauracion/proveedor');
         
    }
    public function destroy($id)
    {
       $proveedor=Proveedor::findOrFail($id);
        $proveedor->condicion='0';
        $proveedor->update();
  	return Redirect::to('restauracion/proveedor');
    }
}
