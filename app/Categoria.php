<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable = [
        'descripcion'
    ];

    public function empresas(){
        $empresas=$this->belongsTo('App\Empresa','idcategoria');
    }
}
