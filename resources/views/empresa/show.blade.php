@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Empresa</div>
                    <br/>
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Categoria</th>
                                <th>Logo</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>{{ $empresa->id }}</td>
                                <td>{{ $empresa->nombre}}</td>
                                <td>{{$categoria->descripcion}}</td>
                                <td>{{ $empresa->descripcion}}</td>
                                <td>
                                    <img src="{{asset('images/'.$empresa->logo)}}" alt="{{$empresa->nombre}}"
                                         height="100px" width="100px" class="img-thumbnail">
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                @include('sucursal.table')
            </div>
        </div>
    </div>
@endsection
