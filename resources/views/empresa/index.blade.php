@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Empresas</div>
                    <div class="panel-body">
                        <!-- Button trigger modal -->
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                            Agregar Empresa
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Agregar Empresa</h4>
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

                                            @include ('empresa.form')

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
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($empresas as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nombre}}</td>
                                        <td>{{ $item->descripcion}}</td>
                                        <td>
                                            <img src="{{asset('images/'.$item->logo)}}" alt="{{$item->nombre}}" height="100px" width="100px" class="img-thumbnail">
                                        </td>
                                        <td>
                                            <a href="{{ url('/empresa/' . $item->id) }}" title="View Empresa"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/empresa/' . $item->id . '/edit') }}" title="Edit Empresa"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/empresa', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Empresa',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $empresas->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div
@endsection
