<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursal';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable = [
        'coordenadas',
        'direccion',
        'telefono',
        'idempresa'
    ];

    public function empresa(){
        $empresa=$this->belongsTo("App\Empresa",'idempresa');
    }
}
