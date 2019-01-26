<?php

namespace laravel\Http\Controllers;

use Illuminate\Http\Request;

use laravel\Http\Requests;
use laravel\RestauracionVenta;
use laravel\Venta;
use Illuminate\Support\Facades\Redirect;
use laravel\Http\Requests\RestauracionVentaFormRequest;
use DB;
use Session;

class RestauracionVentaController extends Controller
{
    public function index(Request $request)
    {
        
       if ($request)
       {
        $query=trim($request->get('searchText'));
        $ventas=DB::table('venta as v')
        ->join('proveedor as p','v.idProveedor','=','p.idProveedor')
        ->join('cliente as c','v.idCliente','=','c.idCliente')
        ->select('v.idVenta','v.fecha_pago','p.nombre as proveedor','c.nombre as cliente','v.fecha_inicio','v.fecha_fin','v.Estado')
        ->where ('condicio','=','-1')
        ->where('v.fecha_pago','LIKE','%'.$query.'%')
        ->orderBy('idVenta','desc')
        ->paginate (7);
        return view('restauracion.venta.index',["ventas"=>$ventas,"searchText"=>$query]);
       }
   
    }  
    public function update(RestauracionVentaFormRequest $request,$id)
    {
    $venta=Venta::findOrFail($id);
    $venta->idCliente=$request->get('idCliente');
    $venta->idProveedor=$request->get('idProveedor');
    $venta->fecha_pago=$request->get('fecha_pago');
    $venta->fecha_inicio=$request->get('fecha_inicio');
    $venta->fecha_fin=$request->get('fecha_fin');
    $venta->Estado=$request->get('Estado');
    $venta->update();
    return Redirect::to('restauracion/ventas');
        
    }
    public function destroy($id)
    {
        $venta=Venta::findOrFail($id);
        $venta->condicio='0';
        $venta->update();
    return Redirect::to('restauracion/venta');
  }

}
