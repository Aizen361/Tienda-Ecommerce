<?php

namespace laravel;

use Illuminate\Database\Eloquent\Model;

class DetalleIngreso extends Model
   {
    protected $table='detalle_ingreso';
    protected $primaryKey='idDetalleIngreso';
    public $timestamps=false;

    protected $fillable =[
        'idIngreso',
        'idProducto',
        'idCliente',
        'nombre',
        'cantidad',
        'precio_venta',

    	
    ];						

 protected $guarded =[
 ];
}
