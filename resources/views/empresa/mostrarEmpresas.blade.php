@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <br/>
                        <br/>
                        <div >
                            <table class="table table-borderless">
                                <tbody>
                                @foreach($empresas as $item)
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="{{ url('/empresa/' . $item->id) }}" title=""><h4>
                                                            {{ $item->nombre}}
                                                        </h4></a>
                                                    {{ $item->id }}
                                                    {{ $item->descripcion}}

                                                    <img src="{{asset('images/'.$item->logo)}}" alt="{{$item->nombre}}"
                                                         height="100px" width="100px" class="img-thumbnail">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div
@endsection
