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

                    @if(count($errors)>0)
                        <div class="b-message message-error">
                            <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                            </ul>
                        </div>
                    @endif
                    <div id="contact">
                        <div class="form-message"></div>
                        {!! Form::open(['route'=>'admin.personas.store','method'=>'POST','style'=>'margin-bottom: 10px;','id'=>'myform'])!!}
                        <div class="input-wrap">
                            <i class="icon-user"></i>
                            {!! Form::text('nombre',null,['class'=>'field-name','placeholder'=>'Nombres (obligatorio)'])!!}
                        </div>
                        <div class="input-wrap">
                            <i class="icon-user"></i>
                            {!! Form::text('apellido',null,['class'=>'field-name','placeholder'=>'Apellidos (obligatorio)'])!!}
                        </div>
                        <div class="select-wrap">
                            <i class="icon-suitcase"></i>
                            {!! Form::select('id_genero', $generos, null, ['placeholder' => 'Género (obligatorio)'])!!}
                        </div>

                        <div class="input-wrap">
                            <i class="icon-envelope"></i>
                            {!! Form::email('email',null,['class'=>'field-email','placeholder'=>'Email (opcional)'])!!}
                        </div>

                        <div class="input-wrap">
                            <i class="icon-pencil"></i>
                            {!! Form::text('rut',null,['id'=>'rut','name'=>'rut','placeholder'=>'RUT (opcional)'])!!}
                        </div>
                        <div class="input-wrap">
                            <i class="icon-phone"></i>
                            {!! Form::text('telefono',null,['placeholder'=>'Número Telefónico'])!!}
                        </div>

                        <div class="select-wrap">
                            <i class="icon-suitcase"></i>
                            {!! Form::select('id_etnia', $etnias, null, ['placeholder' => 'Etnia (obligatorio)'])!!}
                        </div>
                        <div class="select-wrap">
                            <i class="icon-suitcase"></i>
                            {!! Form::select('id_comuna',$region, null, ['placeholder' => 'Comuna (obligatorio)'])!!}
                        </div>

                        <div class="select-wrap">
                            <i class="icon-suitcase"></i>
                            {!! Form::select('id_ocupacion', $ocupaciones, null, ['placeholder' => 'Ocupación (obligatorio)'])!!}
                        </div>

                        <div class="select-wrap">
                            <i class="icon-suitcase"></i>
                            {!! Form::select('id_rubro', $rubros, null, ['placeholder' => 'Rubro (obligatorio)'])!!}
                        </div>

                        <div class="select-wrap">
                            <i class="icon-suitcase"></i>
                            {!! Form::select('id_centro_estudio', $centro_estudios, null, ['placeholder' => 'Centro Estudio (obligatorio)'])!!}
                        </div>

                        <div class="input-wrap">
                            <i class="icon-briefcase"></i>
                            {!! Form::text('empresa_asesor',null,['class'=>'field-empresa','placeholder'=>'Empresa Asesor (obligatorio)'])!!}
                        </div>
                        <div class="input-wrap">
                            <i class="icon-key"></i>
                            {!! Form::password('password',['class'=>'field-key','placeholder'=>'Contraseña (obligatorio)'])!!}
                        </div>
                        <div class="input-wrap">
                            <i class="icon-key"></i>
                            {!! Form::password('password_confirmation',['class'=>'field-key','placeholder'=>'Repita Contraseña (obligatorio)'])!!}
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

