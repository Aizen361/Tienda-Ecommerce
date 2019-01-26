<?php

namespace laravel;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class AccesoProveedor extends Model
{
     use SoftDeletes;
    protected $table='proveedor';
    protected $primaryKey='idProveedor';
    public $timestamps=false;

    protected $fillable =[
        'nombre',
    	'calle',
        'no',
    	'colonia',
    	'municipio',
    	'estado',
    	'cp',
    	'correo',
         'password',
         'telefono',
         'condicion'
         
    ];						
protected $date=['deleted_at'];

    
}
