<?php

namespace laravel\Http\Controllers;

use Illuminate\Http\Request;

use laravel\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use laravel\Http\Requests\RestauracionIngresoFormRequest;
use laravel\Ingreso;
use laravel\RestauracionIngreso;
use DB;


class RestauracionIngresoController extends Controller
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
        $ingresos=DB::table('ingreso as i')
        ->join('cliente as c','i.idCliente','=','c.idCliente')
        ->join('productos as p','i.idProducto','=','p.idProducto')
        ->select('i.idIngreso','i.precio_compra','c.nombre as cliente','p.nombre as productos','i.fecha_compra','i.tipo_pago','i.estado')
        ->where('c.nombre','LIKE','%'.$query.'%')
        ->where ('condiion','=','-1')
        ->orderBy('idIngreso','desc')
        ->paginate (7);
        return view('restauracion.ingreso.index',["ingresos"=>$ingresos,"searchText"=>$query]);
       }
   
    }
     public function update(IngresoFormRequest $request,$id)
    {
    $ingreso=Ingreso::findOrFail($id);
    $ingreso->idCliente=$request->get('idCliente');
    $ingreso->idProducto=$request->get('idProducto');
    $ingreso->precio_compra=$request->get('precio_compra');
    $ingreso->fecha_compra=$request->get('fecha_compra');
    $ingreso->tipo_pago=$request->get('tipo_pago');
    $ingreso->estado=$request->get('estado');
    $ingreso->save();
    return Redirect::to('restauracion/ingreso');
    }
    public function destroy($id)
    {
    $ingreso=Ingreso::findOrFail($id);
        $ingreso->condiion='0';
        $ingreso->update();

    return Redirect::to('restauracion/ingreso');
    }
}
