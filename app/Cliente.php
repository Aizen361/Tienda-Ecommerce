<?php

namespace laravel;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
 {
    protected $table='cliente';
    protected $primaryKey='idCliente';
    public $timestamps=false;

    protected $fillable =[
            'nombre',
            'apellido_paterno',
            'apellido_materno',
            'calle',
            'no',
            'colonia',
            'municipio',
            'estado',
            'cp',
            'correo',
            'telefono',
    	
    ];						

 protected $guarded =[
 ];

    
}

