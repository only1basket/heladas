@extends('main')

@section('title','Evaluación de Impacto')

@section('content')
    <div class="content shortcodes">
        <div class="layout">
            <div class="row">
                <div class="row-item col-3_4">
                    <div class="title">
                        <h3 class="lined">¡ Bienvenido !</h3>
                    </div>

                    <!-- Vertical Tabs -->
                    <div class="b-tabs m-nav-left">
                        <!-- Tabs Navigation -->
                        <ul class="tabs-nav">
                            <li class="active"><span><i class="icon-user"></i>Ingresar</span></li>
                            <li><span><i class="icon-info-sign"></i>Recordarme</span></li>
                        </ul>
                        <!-- End Tabs Navigation -->
                        <!-- Tabs Content -->
                        <div class="tabs-content">
                            <div class="tab active">
                                {!! Form::open(['route'=>'admin.auth.login','method'=>'POST','style'=>'style="margin-bottom: 10px;']) !!}
                                    <div class="input-wrap">
                                        <i class="icon-user"></i>
                                        {!! Form::email('email',null,['class'=>'field-email','placeholder'=>'email o RUT']) !!}
                                    </div>

                                    <div class="input-wrap">
                                        <i class="icon-key"></i>
                                        {!! Form::password('password',['class'=>'field-key','placeholder'=>'Contraseña']) !!}
                                    </div>
                                    <div>
                                        {!! Form::submit('Ingresar',['class'=>'btn-submit btn colored'])!!}
                                        <a href="registrarse/" style="float: right;">¿No esta registrado? registrese</a>
                                    </div>
                                {!! Form::close()!!}
                            </div>
                            <div class="tab">
                                <form class="b-form b-login-form" action="" style="margin-bottom: 10px;">
                                    <p>Ingrese su email y le enviaremos una nueva contraseña temporal, la cual usted una vez dentro del sistema podrá cambiar por una que le sea fácil recordar. Si en su registro no ingreso un email y pero si ingreso su RUT, por favor llámenos y le ayudaremos a recuperar su constraseña +56 (64) 2 334896 .</p>
                                    <div class="input-wrap">
                                        <i class="icon-user"></i>
                                        <input class="field-username" type="text" placeholder="email">
                                    </div>
                                    <input class="btn-submit btn colored" type="submit" value="Recuperar Constraseña">
                                </form>
                            </div>
                        </div>
                        <!-- End Tabs Content -->
                    </div>
                    <!-- End Vertical Tabs -->
                </div>

                <div class="row-item col-1_4">
                    <div class="title">
                        <h3 class="lined">Ayuda</h3>
                    </div>
                    <p>Tenga en cuenta que</p>
                    <ul class="b-list info">
                        <li><span>su nombre de usuario es su email o RUT</span></li>
                        <li><span>su cotraseña es la que usted ingreso en su registro</span></li>
                        <li><span>¿Olvido su contraseña? En el menu "recordarme" puede recuperarla</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection