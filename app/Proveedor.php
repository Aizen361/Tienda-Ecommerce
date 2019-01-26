<?php

namespace laravel;

use Illuminate\Database\Eloquent\Model;


class Proveedor extends Model
{

    protected $table='users';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable =[
        'name',
    	'calle',
        'no',
    	'colonia',
    	'municipio',
    	'estado',
    	'cp',
    	'email',
         'password',
         'telefono'
         
    ];						
protected $date=['deleted_at'];

    

    }
