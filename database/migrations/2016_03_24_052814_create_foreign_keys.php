<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('provincia', function(Blueprint $table) {
			$table->foreign('id_region')->references('id')->on('region')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('comuna', function(Blueprint $table) {
			$table->foreign('id_provincia')->references('id')->on('provincia')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('persona', function(Blueprint $table) {
			$table->foreign('id_comuna')->references('id')->on('comuna')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('persona', function(Blueprint $table) {
			$table->foreign('id_ocupacion')->references('id')->on('ocupacion')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('persona', function(Blueprint $table) {
			$table->foreign('id_etnia')->references('id')->on('etnia')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('persona', function(Blueprint $table) {
			$table->foreign('id_genero')->references('id')->on('genero')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('persona', function(Blueprint $table) {
			$table->foreign('id_rubro')->references('id')->on('rubro')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('persona', function(Blueprint $table) {
			$table->foreign('id_centro_estudio')->references('id')->on('centro_estudio')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('sa_ema', function(Blueprint $table) {
			$table->foreign('idComuna')->references('id')->on('comuna')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('sa_variable', function(Blueprint $table) {
			$table->foreign('idUnidad')->references('id')->on('sa_unidad')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('sa_ema_variable', function(Blueprint $table) {
			$table->foreign('idEma')->references('id')->on('sa_ema')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('sa_ema_variable', function(Blueprint $table) {
			$table->foreign('idVariable')->references('id')->on('sa_variable')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('dmc_pronostico_12', function(Blueprint $table) {
			$table->foreign('id_EmaVariable')->references('id')->on('sa_ema_variable')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('sa_muestra', function(Blueprint $table) {
			$table->foreign('idEmaVariable')->references('id')->on('sa_ema_variable')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('estacion', function(Blueprint $table) {
			$table->foreign('id_comuna')->references('id')->on('comuna')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('rn_ecuaciones', function(Blueprint $table) {
			$table->foreign('id_alerta')->references('id')->on('alerta')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('rn_ecuaciones', function(Blueprint $table) {
			$table->foreign('id_estacion')->references('id')->on('estacion')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('alerta_generada', function(Blueprint $table) {
			$table->foreign('id_ecuacion')->references('id')->on('rn_ecuaciones')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('suscripcion', function(Blueprint $table) {
			$table->foreign('id_persona')->references('id')->on('persona')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('suscripcion', function(Blueprint $table) {
			$table->foreign('id_estacion')->references('id')->on('estacion')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('suscripcion', function(Blueprint $table) {
			$table->foreign('id_suscripciontipo')->references('id')->on('suscripcion_tipo')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('mensaje', function(Blueprint $table) {
			$table->foreign('id_suscripciontipo')->references('id')->on('suscripcion_tipo')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('mensaje', function(Blueprint $table) {
			$table->foreign('id_alerta')->references('id')->on('alerta')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('mensaje_enviado', function(Blueprint $table) {
			$table->foreign('id_mensaje')->references('id')->on('mensaje')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('mensaje_enviado', function(Blueprint $table) {
			$table->foreign('id_alertagenerada')->references('id')->on('alerta_generada')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('id_usuariotipo')->references('id')->on('usuario_tipo')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('usuario_detalle', function(Blueprint $table) {
			$table->foreign('id_usuario')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('usuario_detalle', function(Blueprint $table) {
			$table->foreign('id_persona')->references('id')->on('persona')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('provincia', function(Blueprint $table) {
			$table->dropForeign('provincia_id_region_foreign');
		});
		Schema::table('comuna', function(Blueprint $table) {
			$table->dropForeign('comuna_id_provincia_foreign');
		});
		Schema::table('persona', function(Blueprint $table) {
			$table->dropForeign('persona_id_comuna_foreign');
		});
		Schema::table('persona', function(Blueprint $table) {
			$table->dropForeign('persona_id_ocupacion_foreign');
		});
		Schema::table('persona', function(Blueprint $table) {
			$table->dropForeign('persona_id_etnia_foreign');
		});
		Schema::table('persona', function(Blueprint $table) {
			$table->dropForeign('persona_id_genero_foreign');
		});
		Schema::table('persona', function(Blueprint $table) {
			$table->dropForeign('persona_id_rubro_foreign');
		});
		Schema::table('persona', function(Blueprint $table) {
			$table->dropForeign('persona_id_centro_estudio_foreign');
		});
		Schema::table('sa_ema', function(Blueprint $table) {
			$table->dropForeign('sa_ema_idComuna_foreign');
		});
		Schema::table('sa_variable', function(Blueprint $table) {
			$table->dropForeign('sa_variable_idUnidad_foreign');
		});
		Schema::table('sa_ema_variable', function(Blueprint $table) {
			$table->dropForeign('sa_ema_variable_idEma_foreign');
		});
		Schema::table('sa_ema_variable', function(Blueprint $table) {
			$table->dropForeign('sa_ema_variable_idVariable_foreign');
		});
		Schema::table('dmc_pronostico_12', function(Blueprint $table) {
			$table->dropForeign('dmc_pronostico_12_id_EmaVariable_foreign');
		});
		Schema::table('sa_muestra', function(Blueprint $table) {
			$table->dropForeign('sa_muestra_idEmaVariable_foreign');
		});
		Schema::table('estacion', function(Blueprint $table) {
			$table->dropForeign('estacion_id_comuna_foreign');
		});
		Schema::table('rn_ecuaciones', function(Blueprint $table) {
			$table->dropForeign('rn_ecuaciones_id_alerta_foreign');
		});
		Schema::table('rn_ecuaciones', function(Blueprint $table) {
			$table->dropForeign('rn_ecuaciones_id_estacion_foreign');
		});
		Schema::table('alerta_generada', function(Blueprint $table) {
			$table->dropForeign('alerta_generada_id_ecuacion_foreign');
		});
		Schema::table('suscripcion', function(Blueprint $table) {
			$table->dropForeign('suscripcion_id_persona_foreign');
		});
		Schema::table('suscripcion', function(Blueprint $table) {
			$table->dropForeign('suscripcion_id_estacion_foreign');
		});
		Schema::table('suscripcion', function(Blueprint $table) {
			$table->dropForeign('suscripcion_id_suscripciontipo_foreign');
		});
		Schema::table('mensaje', function(Blueprint $table) {
			$table->dropForeign('mensaje_id_suscripciontipo_foreign');
		});
		Schema::table('mensaje', function(Blueprint $table) {
			$table->dropForeign('mensaje_id_alerta_foreign');
		});
		Schema::table('mensaje_enviado', function(Blueprint $table) {
			$table->dropForeign('mensaje_enviado_id_mensaje_foreign');
		});
		Schema::table('mensaje_enviado', function(Blueprint $table) {
			$table->dropForeign('mensaje_enviado_id_alertagenerada_foreign');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_id_usuariotipo_foreign');
		});
		Schema::table('usuario_detalle', function(Blueprint $table) {
			$table->dropForeign('usuario_detalle_id_usuario_foreign');
		});
		Schema::table('usuario_detalle', function(Blueprint $table) {
			$table->dropForeign('usuario_detalle_id_persona_foreign');
		});
	}
}