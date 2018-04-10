<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SB Admin 2 - Bootstrap Admin Theme</title>

  {!!Html::style('css/bootstrap.min.css')!!}
  {!!Html::style('css/metisMenu.min.css')!!}
  {!!Html::style('css/sb-admin-2.css')!!}
  {!!Html::style('css/myStyle.css')!!}
  {!!Html::style('css/ie8.css')!!}
  {!!Html::style('css/font-awesome.min.css')!!}

</head>

<body>

    <div id="wrapper">

        <nav  class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

          <!-- Aqui el nav o cabezera -->

            <!-- Lado Izquierdo -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>

              <a class="navbar-brand" href="{{ url('/home') }}">Campamento Emanuel</a>
            </div>
            <!-- Fin del Lado Izquierdo -->


            <!-- Lado Derecho -->
            <ul class="nav navbar-top-links navbar-right">

                   <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                          {{ Auth::user()->name }} <i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i>
                      </a>

                      <ul class="dropdown-menu dropdown-user">

                            <li><a href="{{ url('/login') }}">
                                <i class="fa fa-gear fa-fw"></i> Registrar</a>
                            </li>

                            <li class="divider"></li>

                            <li>
                               <a href="{{ url('/login') }}"
                                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out fa-fw"></i> Logout</a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                   {{ csrf_field() }}
                                </form>
                            </li>

                       </ul>
                  </li>
            </ul>
            <!-- Fin Lado Derecho -->
          <!-- Aqui Finaliza el nav o cabezera -->


          <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    @if(Auth::user()->tipo =!'N')
                    <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i> Persona<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                            <li>
                                <div class="input-group">
                                  <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                  </span>
                                  <input type="text" class="form-control" placeholder="Ingrese el CI">
                                </div>

                                <!--
                                <div class="input-group margin-bottom-sm">
                                  <span class="input-group-addon">
                                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                  </span>
                                  <input class="form-control" type="text" placeholder="CI de la Persona">
                                </div>
                                -->
                            </li>

                            <li>
                                <a href="{{ url('/persona/create') }}">
                                  <i class="fa fa-user-plus" aria-hidden="true"></i> Agregar Persona</a>
                            </li>

                            <li>
                                <a href="{{ url('/persona') }}"><i class='fa fa-list-ol fa-fw'></i> Lista de Personas</a>
                            </li>

                        </ul>
                    </li>
                   @endif
                    <li>
                        <a href="#"><i class="fa fa-child fa-fw"></i> Bautismos<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                              <div class="input-group">
                                <span class="input-group-btn">
                                  <button class="btn btn-default" type="button">
                                  <i class="fa fa-search" aria-hidden="true"></i>
                                  </button>
                                </span>
                                <input type="text" class="form-control" placeholder="Ingrese nro del bautismo">
                              </div>
                            </li>

                            <li>
                                <a href="{{ url('/bautismo/create')}}"><i class='fa fa-plus fa-fw'></i> Agregar Bautismo</a>
                            </li>

                            <li>
                                <a href="{{ url('/bautismo')}}"><i class='fa fa-list-ol fa-fw'></i> Lista de Bautismos</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bell" aria-hidden="true"></i> Ministerios<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <div class="input-group">
                                  <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                  </span>
                                  <input type="text" class="form-control" placeholder="Ingrese nro del ministerio">
                              </div>
                            </li>

                            <li>
                                <a href="{{ url('/ministerio/create')}}"><i class='fa fa-plus fa-fw'></i> Agregar Ministerio</a>
                            </li>

                            <li>
                                <a href="{{ url('/ministerio')}}"><i class='fa fa-list-ol fa-fw'></i> Lista de Ministerios</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i> Miembros<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <div class="input-group">
                                  <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                  </span>
                                  <input type="text" class="form-control" placeholder="Ingrese CI">
                                </div>
                            </li>

                            <li>
                                <a href="{{ url('/miembro/create')}}"><i class='fa fa-user-plus'></i> Agregar Miembro</a>
                            </li>

                            <li>
                                <a href="{{ url('/telefono/create')}}"><i class='fa fa-phone'></i> Agregar Telefono</a>
                            </li>

                            <li>
                                <a href="{{ url('/trabajo/create')}}"><i class='fa fa-briefcase'></i> Agregar Trabajo</a>
                            </li>

                            <li>
                                <a href="{{ url('/miembro')}}"><i class='fa fa-list-ol fa-fw'></i> Lista de Miembros</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-child fa-fw"></i> Encuentros<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                              <div class="input-group">
                                <span class="input-group-btn">
                                  <button class="btn btn-default" type="button">
                                  <i class="fa fa-search" aria-hidden="true"></i>
                                  </button>
                                </span>
                                <input type="text" class="form-control" placeholder="Ingrese nro de encuentro">
                              </div>
                            </li>

                            <li>
                                <a href="{{ url('/encuentro/create')}}"><i class='fa fa-plus fa-fw'></i> Agregar Encuentro</a>
                            </li>

                            <li>
                                <a href="{{ url('/encuentro')}}"><i class='fa fa-list-ol fa-fw'></i> Lista de Encuentros</a>
                            </li>

                            <li>
                                <a href="#"><i class='fa fa-plus fa-fw'></i> Registrar Prerequisitos</a>
                            </li>

                            <li>
                                <a href="#"><i class='fa fa-plus fa-fw'></i> Registrar Version</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-child fa-fw"></i> Celulas<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                              <div class="input-group">
                                <span class="input-group-btn">
                                  <button class="btn btn-default" type="button">
                                  <i class="fa fa-search" aria-hidden="true"></i>
                                  </button>
                                </span>
                                <input type="text" class="form-control" placeholder="Ingrese nro de celula">
                              </div>
                            </li>

                            <li>
                                <a href="{{ url('/celula/create')}}"><i class='fa fa-plus fa-fw'></i> Agregar Celula</a>
                            </li>

                            <li>
                                <a href="{{ url('/celula')}}"><i class='fa fa-list-ol fa-fw'></i> Lista de Celulas</a>
                            </li>

                            <li>
                                <a href="#"><i class='fa fa-bars'></i> Registrar Informe</a>
                            </li>

                            <li>
                                <a href="#"><i class='fa fa-bars'></i> Registrar Asistencia</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-child fa-fw"></i> Escuelas de Lideres<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                              <div class="input-group">
                                <span class="input-group-btn">
                                  <button class="btn btn-default" type="button">
                                  <i class="fa fa-search" aria-hidden="true"></i>
                                  </button>
                                </span>
                                <input type="text" class="form-control" placeholder="Ingrese nro de escuela">
                              </div>
                            </li>

                            <li>
                                <a href="#"><i class='fa fa-plus fa-fw'></i> Agregar Escuela</a>
                            </li>

                            <li>
                                <a href="#"><i class='fa fa-server'></i> Agregar Modulo</a>
                            </li>

                            <li>
                                <a href="#"><i class='fa fa-book'></i> Registrar Estudiante</a>
                            </li>

                            <li>
                                <a href="#"><i class='fa fa-book'></i> Registrar Ficha de Control</a>
                            </li>

                            <li>
                                <a href="#"><i class='fa fa-list-ol fa-fw'></i> Lista de Escuelas de Lideres</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-child fa-fw"></i> Reuniones <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                              <div class="input-group">
                                <span class="input-group-btn">
                                  <button class="btn btn-default" type="button">
                                  <i class="fa fa-search" aria-hidden="true"></i>
                                  </button>
                                </span>
                                <input type="text" class="form-control" placeholder="Ingrese nro de reunion">
                              </div>
                            </li>

                            <li>
                                <a href="#"><i class='fa fa-plus fa-fw'></i> Agregar Reunion</a>
                            </li>

                            <li>
                                <a href="#"><i class='fa fa-list-ol fa-fw'></i> Lista de Reuniones</a>
                            </li>

                            <li>
                                <a href="#"><i class='fa fa-bars'></i> Llenar Registro</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

     </nav>

        <div id="page-wrapper">
        @yield('content')
        </div>

    </div>


    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}



</body>

</html>
