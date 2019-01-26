<?php

namespace laravel;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	  public function productos()
    {
        return $this->hasMany('Producto::class');
    }
    protected $table='categoria';
    protected $primaryKey='idCategoria';
    public $timestamps=false;

    protected $fillable =[
        'nombre',
        'id'
    	
    ];						

 protected $guarded =[
 ];

    
}

											