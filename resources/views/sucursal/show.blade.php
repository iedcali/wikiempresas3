@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Sucursales</div>
                    <div class="panel-body">
                        <!-- Button trigger modal -->
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                            Agregar Sucursal
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Agregar Sucursal</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!--CONTENIDO-->
                                        <br />

                                        @if ($errors->any())
                                            <ul class="alert alert-danger">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        @endif

                                        {!! Form::open(['url' => '/empresa', 'class' => 'form-horizontal', 'files' => true]) !!}



                                        {!! Form::close() !!}
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>

                    @include('empresa.search')

                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Logo</th>
                                <th>Categoria</th>
                            </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>{{ $empresa->id }}</td>
                                    <td>{{ $empresa->nombre}}</td>
                                    <td>{{ $empresa->descripcion}}</td>
                                    <td>{{$categoria->descripcion}}</td>
                                    <td>
                                        <img src="{{asset('images/'.$empresa->logo)}}" alt="{{$empresa->nombre}}" height="100px" width="100px" class="img-thumbnail">
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div
@endsection
