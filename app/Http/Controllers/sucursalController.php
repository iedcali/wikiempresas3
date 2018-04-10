<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Empresa;
use App\Http\Requests\empresaFormRequest;
use App\Http\Requests\empresaRequest;
use App\Sucursal;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class sucursalController extends Controller
{
    public function index(Request $request)
    {
        return "sucursal controller index";
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $sucursal = new Sucursal();
        $sucursal->coordenadas = $request->coordenadas;
        $sucursal->direccion = $request->direccion;
        $sucursal->telefono = $request->telefono;
        $sucursal->idempresa = $request->idempresa;
        $sucursal->save();
        return Redirect::to('empresa/'.$sucursal->idempresa);
    }

    public function show($id)
    {
        return 'sucursal->show()';
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        $sucursal=Sucursal::findOrFail($id);
        $idempresa=$sucursal->idempresa;
        $sucursal->delete();
        return Redirect::to('empresa/'.$idempresa);
    }
}
