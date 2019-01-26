<?php

namespace laravel\Http\Controllers;

use Illuminate\Http\Request;

use laravel\Http\Requests;
use laravel\Venta;
use Illuminate\Support\Facades\Redirect;
use laravel\Http\Requests\VentaFormRequest;
use DB;

class VentaController extends Controller
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
        $ventas=DB::table('venta as v')
        ->join('users as u','v.id','=','u.id')
        ->join('cliente as c','v.idCliente','=','c.idCliente')
        ->select('v.idVenta','v.fecha_pago','u.name as users','c.nombre as cliente','v.fecha_inicio','v.fecha_fin','v.Estado')
        ->where('v.fecha_pago','LIKE','%'.$query.'%')
        ->orderBy('idVenta','desc')
        ->where ('condicio','=','0')
        ->paginate (7);
        return view('ventas.ventas.index',["ventas"=>$ventas,"searchText"=>$query]);
       }
     
    }  
    public function create ()
    {
     $proveedores=DB::table('users')->get();
     $clientes=DB::table('cliente')->get();
     return view("ventas.ventas.create",["clientes"=>$clientes,"proveedores"=>$proveedores]);
   }
 
      
    public function store(VentaFormRequest $request)
    {
    $venta=new venta;
    $venta->idCliente=$request->get('idCliente');
    $venta->id=$request->get('id');
    $venta->fecha_pago=$request->get('fecha_pago');
    $venta->fecha_inicio=$request->get('fecha_inicio');
    $venta->fecha_fin=$request->get('fecha_fin');
    $venta->Estado=$request->get('Estado');
    $venta->save();
    return Redirect::to('ventas/ventas');
     }
     public function show($id)
     { 
      return view("ventas.ventas.show",["venta"=>Venta::findOrFail($id)]);
    }

      public function edit($id)
      { 

      $venta=Venta::findOrFail($id);
      $proveedores=DB::table('users')->get();
      $clientes=DB::table('cliente')->get();
      return view("ventas.ventas.edit",["venta"=>$venta,"proveedores"=>$proveedores,"clientes"=>$clientes]);
    }
  
    public function update(VentaFormRequest $request,$id)
    {
    $venta=Venta::findOrFail($id);
    $venta->idCliente=$request->get('idCliente');
    $venta->id=$request->get('id');
    $venta->fecha_pago=$request->get('fecha_pago');
    $venta->fecha_inicio=$request->get('fecha_inicio');
    $venta->fecha_fin=$request->get('fecha_fin');
    $venta->Estado=$request->get('Estado');
    $venta->update();
    return Redirect::to('ventas/ventas');
       
    }
    public function destroy($id)
    {
        $venta=Venta::findOrFail($id);
        $venta->condicio='-1';
        $venta->update();
    return Redirect::to('ventas/ventas');
  }


}
