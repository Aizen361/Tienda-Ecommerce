<?php

namespace laravel\Http\Controllers;

use Illuminate\Http\Request;

use laravel\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use laravel\Http\Requests\IngresoFormRequest;
use laravel\Ingreso;
use DB;
class IngresoController extends Controller
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
        ->select('i.idIngreso','i.precio_compra','c.nombre as cliente','p.nombre as productos','i.tipo_pago','i.estado')
        ->where('c.nombre','LIKE','%'.$query.'%')
        ->where ('condiion','=','0')
        ->orderBy('idIngreso','desc')
        ->paginate (7);
        return view('compras.ingresos.index',["ingresos"=>$ingresos,"searchText"=>$query]);
       }
    }
    public function create ()
    {

      $clientes=DB::table('cliente')->get();
      $productos=DB::table('productos')->get();
      return view("compras.ingresos.create",["clientes"=>$clientes,"productos"=>$productos]);
    }

    public function store(IngresoFormRequest $request)
    {
    $ingreso=new Ingreso;
    $ingreso->idCliente=$request->get('idCliente');
    $ingreso->idProducto=$request->get('idProducto');
    $ingreso->precio_compra=$request->get('precio_compra');
    $ingreso->fecha_compra=$request->get('fecha_compra');
    $ingreso->tipo_pago=$request->get('tipo_pago');
    $ingreso->estado=$request->get('estado');
    $ingreso->save();
    return Redirect::to('compras/ingresos');
     }
      public function show($id)
     { 
      return view("compras.ingresos.show",["ingreso"=>Ingreso::findOrFail($id)]);
    }
    public function edit($id)
     { 

       
     $ingreso=Ingreso::findOrFail($id);
     $clientes=DB::table('cliente')->get();
     $productos=DB::table('productos')->get();
     return view("compras.ingresos.edit",["ingreso"=>$ingreso,"clientes"=>$clientes,"productos"=>$productos]);
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
    return Redirect::to('compras/ingresos');
    }
    public function destroy($id)
    {
    $ingreso=Ingreso::findOrFail($id);
        $ingreso->condiion='-1';
        $ingreso->update();

    return Redirect::to('compras/ingresos');
    }

    }
