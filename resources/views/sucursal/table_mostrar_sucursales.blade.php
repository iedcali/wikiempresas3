<br>
<div class="panel panel-default">
    <div class="panel panel-heading">
        Sucursales
    </div>

    <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead style="background-color:#00aedb">
                    <th>Id</th>
                    <th>Coordenadas</th>
                    <th>Ubicacion</th>
                    <th>Telefono</th>
                    </thead>
                    <tbody>
                    @foreach($sucursales as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->coordenadas}}</td>
                            <td>{{$item->direccion}}</td>
                            <td>{{$item->telefono}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div align="center">{{$sucursales->render()}}</div>
            </div>
        </div>
</div>