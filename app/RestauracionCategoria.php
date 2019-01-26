<?php

namespace laravel;

use Illuminate\Database\Eloquent\Model;

class RestauracionCategoria extends Model
{
    protected $table='categoria';
    protected $primaryKey='idCategoria';
    public $timestamps=false;

    protected $fillable =[
        'nombre',
        'idProveedor'
    	
    ];						

 protected $guarded =[
 ];
}
