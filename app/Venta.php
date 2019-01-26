<?php

namespace laravel;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table='venta';
    protected $primaryKey='idVenta';
    public $timestamps=false;

    protected $fillable =[
        'idCliente',
        'id',
        'fecha_pago',
        'fecha_inicio',
        'fecha_fin',
        'Estado',
    	
    ];						

 protected $guarded =[
 ];
}
