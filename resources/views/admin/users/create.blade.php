@extends('main')
@section('title','Registro')
@section('content')
    <div class="content shortcodes">
        <div class="layout">
            <div class="row">
                <div class="row-item col-3_4">
                    <div class="title">
                        <h3 class="lined">Registro: complete los siguientes campos</h3>
                    </div>
                    <p>
                        Bienvendio, al terminar de completar este formulario podrá acceder a todas la funcionalidad del
                        sistema. Su nombre de usuario será su email, si usted no cuenta con un email puede usar su RUT
                        como nombre de usuario.
                    </p>

                    <div class="gap" style="height: 15px;"></div>

                    <div id="contact">
                        <div class="form-message"></div>
                        {!! Form::open(['route'=>'admin.users.store','method'=>'POST','style'=>'margin-bottom: 10px;'])!!}
                        <div class="input-wrap">
                            <i class="icon-user"></i>
                            {!! Form::text('name',null,['class'=>'field-name','placeholder'=>'Nombres (obligatorio)'])!!}
                        </div>
                        <div class="input-wrap">
                            <i class="icon-user"></i>
                            {!! Form::text('apellido',null,['class'=>'field-name','placeholder'=>'Apellidos (obligatorio)'])!!}
                        </div>
                        <div class="select-wrap">
                            <i class="icon-suitcase"></i>
                            {!! Form::select('genero', array('1' => 'masculino', '2' => 'femenino'), null, ['placeholder' => 'Género (obligatorio)'])!!}
                        </div>

                        <div class="input-wrap">
                            <i class="icon-envelope"></i>
                            {!! Form::email('email',null,['class'=>'field-email','placeholder'=>'Email (opcional)'])!!}
                        </div>
                        <div class="input-wrap">
                            <i class="icon-pencil"></i>
                            {!! Form::text('rut',null,['placeholder'=>'RUT (opcional)'])!!}
                        </div>

                        <div class="select-wrap">
                            <i class="icon-suitcase"></i>
                            {!! Form::select('etnia', array('0'=>'Ninguna','1' => 'Aimara', '2' => 'Alacalufe', '3' => 'Atacameño'), null, ['placeholder' => 'Etnia (obligatorio)'])!!}
                        </div>
                        <div class="select-wrap">
                            <i class="icon-suitcase"></i>
                            {!! Form::select('comuna', array('El Maule'=>array('1' => 'Cauquenes', '2' => 'Chanco', '3' => 'Parral')), null, ['placeholder' => 'Comuna (obligatorio)'])!!}
                        </div>

                        <div class="select-wrap">
                            <i class="icon-suitcase"></i>
                            {!! Form::select('ocupacion', array('1' => 'Agricultor', '2' => 'Estudiante', '3' => 'Asesor Técnico', '10' => 'Otro'), null, ['placeholder' => 'Ocupación (obligatorio)'])!!}
                        </div>

                        <div class="select-wrap">
                            <i class="icon-suitcase"></i>
                            {!! Form::select('rubro', array('1' => 'Frutales', '2' => 'Cereales', '3' => 'Hortalizas', '10' => 'Cultivos Anuales'), null, ['placeholder' => 'Rubro (obligatorio)'])!!}
                        </div>

                        <div class="input-wrap">
                            <i class="icon-briefcase"></i>
                            {!! Form::text('centro_estudio',null,['class'=>'field-empresa','placeholder'=>'Empresa/Centro de Estudios (obligatorio)'])!!}
                        </div>
                        <div class="input-wrap">
                            <i class="icon-key"></i>
                            {!! Form::password('password',['class'=>'field-key','placeholder'=>'Contraseña (obligatorio)'])!!}
                        </div>
                        <div class="input-wrap">
                            <i class="icon-key"></i>
                            {!! Form::password('password',['class'=>'field-key','placeholder'=>'Repita Contraseña (obligatorio)'])!!}
                        </div>

                        {!! Form::submit('Enviar Registro',['class'=>'btn-submit btn colored'] )!!}
                        {!! Form::close()!!}
                        <div class="gap" style="height: 20px;"></div>
                    </div>
                </div>

                <div class="row-item col-1_4">
                    <div class="title">
                        <h3 class="lined">Información</h3>
                    </div>
                    <p>Al registrase en el sistema usted podrá</p>
                    <ul class="b-list iconok">
                        <li><span>Recibir Alertas por SMS</span></li>
                        <li><span>Recibir Alertas por Email</span></li>
                        <li><span>Gestionar Alertas de Otros Usuarios (opcional)</span></li>
                    </ul>
                    <p>Con su registro nos ayuda a analizar los reales usuarios del sistema y así poder mejorar el
                        servicio ofrecido. No enviamos spam a su email.</p>
                </div>
            </div>
        </div>
    </div>
@endsection


