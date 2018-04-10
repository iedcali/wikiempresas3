<br>
<div class="panel panel-default">
    <div class="panel panel-heading">
        Sucursales
    </div>
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Agregar:</h4>
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

                    {!! Form::open(['url' => '/sucursal', 'class' => 'form-horizontal', 'files' => true]) !!}

                    @include ('sucursal.form')

                    {!! Form::close() !!}
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->








    <div class="panel-body">
            <div class="table-responsive">
                <button class="btn btn-warning btn-sm col-lg-offset-0" data-toggle="modal" data-target="#myModal">
                    Agregar Sucursal
                </button>
                <table class="table table-bordered">
                    <thead style="background-color:#00aedb">
                    <th>Id</th>
                    <th>Coordenadas</th>
                    <th>Ubicacion</th>
                    <th>Telefono</th>
                    <th>Operaciones</th>
                    </thead>
                    <tbody>
                    @foreach($sucursales as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->coordenadas}}</td>
                            <td>{{$item->direccion}}</td>
                            <td>{{$item->telefono}}</td>
                            <td style="background-color: #6b9dbb">
                                <a href="{{ url('/sucursal/' . $item->id . '/edit') }}" title="Edit"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                {!! Form::open([
                                    'method'=>'DELETE',
                                    'url' => ['/sucursal', $item->id],
                                    'style' => 'display:inline'
                                ]) !!}
                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-xs',
                                        'title' => 'Delete sucursal',
                                        'onclick'=>'return confirm("Confirm delete?")'
                                )) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div align="center">{{$sucursales->render()}}</div>
            </div>
        </div>
</div>