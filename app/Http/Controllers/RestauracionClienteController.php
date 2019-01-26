<?php

namespace laravel\Http\Controllers;

use Illuminate\Http\Request;

use laravel\Http\Requests;
use laravel\RestauracionCliente;
use laravel\Cliente;
use Illuminate\Support\Facades\Redirect;
use laravel\Http\Requests\RestauracionClienteFormRequest;
use DB;


class RestauracionClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   
       if ($request)
       {
        $query=trim($request->get('searchText'));
        $clientes=DB::table('cliente')
        //->join('categoria as c','p.idCategoria','=','c.idCategoria')//
       // ->select('c.idCliente','c.nombre','c.apellido_paterno','c.apellido_materno','c.calle','c.no','c.colonia','c.municipio','c.estado','c.cp','c.correo','c.telefono')
        ->where('nombre','LIKE','%'.$query.'%')
        ->orderBy('idCliente','desc')
        ->where ('condicion','=','-1')
        ->paginate (7);
        return view('restauracion.cliente.index',["clientes"=>$clientes,"searchText"=>$query]);
       }
   
    }
    public function update(ClienteFormRequest $request,$id)
    {
    $cliente=Cliente::findOrFail($id);
         //$cliente->idCategoria=$request->get('idCategoria');
    $cliente->nombre=$request->get('nombre');
    $cliente->apellido_paterno=$request->get('apellido_paterno');
    $cliente->apellido_materno=$request->get('apellido_materno');
    $cliente->calle=$request->get('calle');
    $cliente->no=$request->get('no');
    $cliente->colonia=$request->get('colonia');
    $cliente->municipio=$request->get('municipio');
    $cliente->estado=$request->get('estado');
    $cliente->cp=$request->get('cp');
    $cliente->correo=$request->get('correo');
    $cliente->telefono=$request->get('telefono');
    $cliente->update();
         return Redirect::to('restauracion/cliente');
    }

    public function destroy($id)
    {
        $cliente=Cliente::findOrFail($id);
         $cliente->condicion='0';
        $cliente->update();
    return Redirect::to('restauracion/cliente');
    } 
}
