@extends('master')

@section('title', '¿Olvidaste tu contraseña? |')

@section('content')
<div class="panel_title">
    <div>
        <h4>¿Olvidaste tu contraseña? Etapa 2</h4>
    </div>
</div>
<div class="col col_12_of_12">
	<form method="post" action>
		{{ csrf_field() }}
		<div class="col col_6_of_12">
			<div id="login-form">
				<p>
					<label>Pregunta Secreta</label>
					<input class="form-control" type="text" value="{{ $account->question }}" disabled>
				</p>
				<p>
					<label>Nueva Contraseña</label>
					<input class="form-control" type="password" name="new_password" placeholder="Nueva contraseña" value="{{ old('new_password') }}">
				</p>		
			</div>
		</div>
		<div class="col col_6_of_12">
			<div id="login-form">
				<p>
					<label>Respuesta Secreta</label>
					<input class="form-control" type="text" name="secret_answer" placeholder="Respuesta Secreta" value="{{ old('secret_answer') }}">
				</p>
				<p>
					<label>Confirmar</label>
					<input class="form-control" type="password" name="conf_password" placeholder="Confirmar" value="{{ old('conf_password') }}">
				</p>
			</div>
		</div>
		<div class="col col_12_of_12">
			<p><center><button type="submit" class="btn btn_blue">Aceptar</button></center></p>
		</div>
	</form>
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection