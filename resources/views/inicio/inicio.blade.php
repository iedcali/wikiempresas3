@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs navbar-right">
                    <li role="presentation" class="actve">
                        <a class="btn-primary" href="{{route('empresa.index')}}">
                            Gestionar Empresa
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <image class=" image col-lg-offset-3" height="130px" width="700px"
           src="{{asset('imagenes/logotipo/wikiempresas.png')}}" alt="logotipo"></image>
    <br><br><br><br><br><br>
    <br>
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6 col-md-">
            <form action="{{route('empresa.hacerbusqueda')}}"method="POST">
               {{csrf_field()}}
                <div class="form-group input-group">
                    <input name="search" type="text" class="form-control">
                    <span class="input-group-btn">
                {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Buscar', ['class' => 'btn btn-primary']) !!}
                </span>
                </div>
            </form>
        </div>
    </div>

    <br><br><br><br>
    <br><br><br><br><br>
@endsection