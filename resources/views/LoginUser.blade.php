@extends ('index')
@section ('content')
<div class="login-area">
        <div class="bg-image">
            <div class="login-signup">
                <div class="container">
                    <div class="login-header">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="login-details">
                                    <ul class="nav nav-tabs navbar-right">
                                        <li><a data-toggle="tab" href="#register">Registrarse</a></li>
                                        <li class="active"><a data-toggle="tab" href="#login">Iniciar Sesion</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="tab-content">
                        <div id="register" class="tab-pane">
                           <div class="login-inner">
                                <div class="title">
                                    <h1>Bienvenido <span></span></h1>
                                </div>
                                <div class="login-form">
                                    @include('error')
                                    <form action="{{url('/registrar')}}" method="POST">
                                    {{csrf_field()}}
                                        <div class="form-details">
                                            <label class="vchNombre">
                                                <input type="text" name="name" placeholder="Nombre" id="vchNombre">
                                            </label>
                                            <label class="vchAPaterno">
                                                <input type="text" name="name" placeholder="Primer Apellido" id="vchAPaterno">
                                            </label>
                                            <label class="vchAMaterno">
                                                <input type="text" name="name" placeholder="Segundo Apellido" id="vchAMaterno">
                                            </label>
                                            <label class="email">
                                                <input type="email" name="email" placeholder="Ejemplo@gmail.com" id="email">
                                            </label>
                                            <label class="Contraseña">
                                                <input type="password" name="passsword" placeholder="Contraseña" id="password">
                                            </label>
                                        </div>
                                        <button type="submit" class="form-btn">Acceder</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="login" class="tab-pane fade in active">
                            <div class="login-inner">
                                <div class="title">
                                    <h1>Bienvenido<span></span></h1>
                                </div>
                                <div class="login-form">
                                    <form method="post" action="{{url('/verificar')}}">
                                        {{csrf_field()}}
                                        <div class="form-details">
                                            <label class="Email">
                                                <input type="email" name="email" placeholder="Ejemplo@gmail.com" id="email">
                                            </label>
                                            <label class="Contraseña">
                                                <input type="password" name="passsword" placeholder="Ingrese su contraseña" id="password">
                                            </label>
                                        </div>
                                        <button type="submit" class="form-btn">Acceder</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop