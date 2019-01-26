<?php

namespace laravel;

use Illuminate\Database\Eloquent\Model;

class RestauracionVenta extends Model
{
        protected $table='venta';
    protected $primaryKey='idVenta';
    public $timestamps=false;

    protected $fillable =[
        'IdCliente',
        'idProveedor',
        'fecha_pago',
        'fecha_inicio'
        'fecha_fin',
        'Estado'
    	
    ];						

 protected $guarded =[
 ];
}
