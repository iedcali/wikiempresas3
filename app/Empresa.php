<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresa';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable = [
        'nombre',
        'descripcion',
        'logo',
        'idcategoria'
    ];

    public function sucursales(){
        $sucursales=$this->hasMany('App\Sucursal','idempresa');
        return $sucursales;
    }

    public function categoria(){
        //*algo de ejemplo
        /*
        esto es un ejemplo de pull 
        */
        return $this->hasOne('App\Categoria','id');
    }
}
