<?php
/**
 * Created by PhpStorm.
 * User: VICTOR H
 * Date: 05/04/2018
 * Time: 01:10 AM
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class Buscador
{
    static function buscarEmpresas($palabras){
        $empresas=DB::table('empresa')
        ->where('descripcion','=','%'.$palabras.'%')
        ->get();
        return $empresas;
    }


}