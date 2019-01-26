<?php

namespace laravel;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $table='ingreso';
    protected $primaryKey='idIngreso';
    public $timestamps=false;

    protected $fillable =[
        'idCliente',
        'idProducto',
        'precio_compra',
        'fecha_compra',
        'tipo_pago',
        'estado',

    	
    ];						

 protected $guarded =[
 ];
}
