<?php

namespace laravel\Http\Controllers;

use Illuminate\Http\Request;

use laravel\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use laravel\Http\Requests\ProveedorFormRequest;
use Illuminate\Support\Facades\Auth;
use laravel\User;
use DB;


class ProveedorController extends Controller
{

//Metodo de Autenticacion Laravel
public function __construct()     
    {
        $this->middleware('auth');
    }

//Funcion para mostrar en una tabla los atributos de la tabla Users de SQL
 public function index(Request $request)
    {
       if ($request)//condicion para la validacion de datos  
       {
        $query=trim($request->get('searchText'));//Muestra un cuadro de busqueda en la vista Index
        $proveedores=DB::table('users')//Guarda todos los datos de la tabla users en una variable 
        ->where('name','LIKE','%'.$query.'%')//Filtraciones de busqueda´por el nombre del usuario
	    ->where ('condicion','=','0')//condicion que muestra los productos que estan activos
        ->orderBy('id','desc')//orden decendente del id de cada usuario
        ->paginate (7);
        return view('almacen.proveedor.index',["proveedores"=>$proveedores,"searchText"=>$query]); //ruta de la vista a la que envia las variables
       }
   
    }


    public function store(Request $request)
    {
    	$nombre=$request['name'];
    	$calle=$request['calle'];
    	$no=$request['no'];
    	$colonia=$request['colonia'];
    	$municipio=$request['municipio'];
    	$estado=$request['estado'];
    	$cp=$request['cp'];
    	$correo=$request['email'];
    	$password=$request['password'];
        $telefono=$request['telefono'];
    	
    	$proveedor=new Proveedor();
    	$proveedor->nombre=$name;
    	$proveedor->calle=$calle;
    	$proveedor->no=$no;
    	$proveedor->colonia=$colonia;
    	$proveedor->municipio=$municipio;
    	$proveedor->estado=$estado;
    	$proveedor->cp=$cp;
    	$proveedor->correo=$email;
    	$proveedor->password=$password;
        $proveedor->telefono=$telefono;
 

    	$proveedor->save();
     
    	return redirect('almacen/categoria');
    }
    //funcion para actualizar los datos del usuario
    public function update(ProveedorFormRequest $request,$id)
    {
         
        $proveedor = User::find(Auth::User()->id);
        $proveedor->name=$request->get('name');
        $proveedor->calle=$request->get('calle');
        $proveedor->no=$request->get('no');
        $proveedor->colonia=$request->get('colonia');
        $proveedor->municipio=$request->get('municipio');
        $proveedor->estado=$request->get('estado');
        $proveedor->cp=$request->get('cp');
        $proveedor->email=$request->get('email');
        $proveedor->password=$request->get('password');
        $proveedor->telefono=$request->get('telefono');
 
         $proveedor->update();
         return Redirect::to('almacen/proveedor');
         
    }
    //Funcion para Editar 
    public function edit($id)
     { 
        $proveedor=User::findOrFail($id);
        return view("almacen.proveedor.edit",["proveedor"=>$proveedor]);
}
    //Funcion para elminar
 	public function destroy($id)
    {
       $proveedor=User::findOrFail($id);
        $proveedor->condicion='-1';
        $proveedor->update();
  	return Redirect::to('almacen/proveedor');
    }

}
