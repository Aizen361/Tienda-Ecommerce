<?php

namespace laravel;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='productos';
    protected $primaryKey='idProducto';
    public $timestamps=false;

    protected $fillable =[
        'idCategoria',
        'nombre',
        'descripcion',
        'imagen',
        'stock',
        'costo_unitario',
        'Unidad_de_medida'
    	
    ];						
 protected $guarded =[
 ];

    
}