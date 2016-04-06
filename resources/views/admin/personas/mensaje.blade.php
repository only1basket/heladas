@extends('main')
@section('title','Registro Exitoso')
@section('content')
    <div class="content shortcodes">
        <div class="layout">
            <div class="row">
                <div class="row-item col-3_4">
                    <div class="title">
                        <h3 class="lined">Registro Exitoso!</h3>
                    </div>
                    <p>
                        Gracias por su incripción, revise su email, para la confirmación de su registro.
                    </p>

                    <div class="gap" style="height: 15px;"></div>
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
