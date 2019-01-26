<?php

namespace laravel\Http\Controllers;

use Illuminate\Http\Request;

use laravel\Http\Requests;
use laravel\Cliente;
use Illuminate\Support\Facades\Redirect;
use laravel\Http\Requests\ClienteFormRequest;
use DB;
class ClienteController extends Controller
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
        $clientes=DB::table('cliente')
        //->join('categoria as c','p.idCategoria','=','c.idCategoria')//
       // ->select('c.idCliente','c.nombre','c.apellido_paterno','c.apellido_materno','c.calle','c.no','c.colonia','c.municipio','c.estado','c.cp','c.correo','c.telefono')
        ->where('nombre','LIKE','%'.$query.'%')
        ->orderBy('idCliente','desc')
  ->where ('condicion','=','0')
        ->paginate (7);
        return view('ventas.cliente.index',["clientes"=>$clientes,"searchText"=>$query]);
       }
     
    }
    public function create ()
    {

         return view("ventas.cliente.create");
    }

    public function store(ClienteFormRequest $request)
    {
    $cliente=new Cliente;
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
    $cliente->save();
    return Redirect::to('ventas/cliente');
     }
     public function show($id)
     { 
      return view("ventas.cliente.show",["cliente"=>Cliente::findOrFail($id)]);
    }
    public function edit($id)
     { 

      $cliente=Cliente::findOrFail($id);
      return view("ventas.cliente.edit",["cliente"=>$cliente]);
      
      }
    
    public function update(ClienteFormRequest $request,$id)
    {
    $cliente=Cliente::findOrFail($id);
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
         return Redirect::to('ventas/cliente');
    }
    public function destroy($id)
    {
        $cliente=Cliente::findOrFail($id);
         $cliente->condicion='-1';
        $cliente->update();
    return Redirect::to('ventas/cliente');
    }  
}