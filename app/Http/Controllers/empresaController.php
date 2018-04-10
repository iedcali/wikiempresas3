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

class empresaController extends Controller
{
    public function hacer_busqueda(Request $request)
    {
        $palabras = $request->get('search');
        $resultado = DB::table('empresa')
            ->where('nombre', 'like', '%' . $palabras . '%')
            ->orderBy('id', 'desc')
            ->paginate(7);
        return view('empresa.mostrarEmpresas', ["empresas" => $resultado]);
    }

    public function mostrar_sucursales($id){

    }

    public function index(Request $request)
    {
        if ($request) {
            $query = trim($request->get('searchText'));
            $empresas = DB::table('empresa')
                ->where('nombre', 'like', '%' . $query . '%')
                ->orderBy('id', 'desc')
                ->paginate(7);
            $categorias = DB::table('categoria')
                ->orderBy('id', 'desc')
                ->get();
            return view('empresa.index',
                ["empresas" => $empresas, "search" => $query, "categorias" => $categorias]);
        }
    }

    public function create()
    {
        $categorias = DB::table('categoria')
            ->orderBy('id', 'desc')
            ->get();
        return view('empresa.create', ["categorias" => $categorias]);
    }

    public function store(Request $request)
    {
        $empresa = new Empresa();
        $empresa->nombre = $request->get('nombre');
        $empresa->descripcion = $request->get('descripcion');
        if (Input::hasFile('logo')) {
            $file = Input::file('logo');
            $file->move(public_path() . '/images/', $file->getClientOriginalName());
            $empresa->logo = $file->getClientOriginalName();
        }
        $empresa->idcategoria = $request->get('idcategoria');
        $empresa->save();
        return Redirect::to('empresa');
    }

    public function show($id)
    {

        $empresa = Empresa::findOrFail($id);
        //$categoria = Categoria::findOrFail($empresa->idcategoria);
        return $empresa->categoria()->get();
        $sucursales = $empresa->sucursales()
            ->orderBy('id', 'desc')
            ->paginate(5);
        //return $empresa->sucursales()->get();
        return view('empresa.show', ["empresa" => $empresa,
            "categoria" => $categoria, "sucursales" => $sucursales]);
    }

    public function edit($id)
    {
        $empresa = Empresa::findOrFail($id);
        $categorias = DB::table('categoria')
            ->orderBy('id', 'desc')
            ->get();
        return view('empresa.edit', ["empresa" => $empresa,
            'categorias' => $categorias]);
    }

    public function update(Request $request, $id)
    {
        $empresa = Empresa::findOrFail($id);
        return dd($request->all(), $empresa->getAttributes());
        $request->nombre = $request->get('nombre');
        $request->descripcion = $request->get('descripcion');
        if (Input::hasFile('logo')) {
            $file = Input::file('logo');
            $file->move(public_path() . '/images/', $file->getClientOriginalName());
            $request->logo = $file->getClientOriginalName();
        }
        $empresa->idcategoria = $request->get('idcategoria');
        $empresa->update();
        return Redirect::to('empresa');
    }

    public function destroy($id)
    {
        $empresa = Empresa::findOrFail($id);
        $sucursales=Sucursal::where('idempresa','=',$empresa->id)
        ->delete();
        $empresa->delete();
        return Redirect::to('empresa');
    }
}
