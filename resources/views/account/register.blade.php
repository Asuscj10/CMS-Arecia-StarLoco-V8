@extends('master')

@section('title', 'Crear Cuenta |')

@section('content')
<div class="panel_title">
    <div>
        <h4>Crear Cuenta</h4>
    </div>
</div>
<div class="col col_12_of_12">
	<div class="alert_message red" jquery="">
		<p>
			&#x26a0; Todos los campos deben ser completados para validar el registro.
		</p>
	</div>
	<form method="post" action>
		{{ csrf_field() }}
		<div class="col col_6_of_12">
			<div id="login-form">
				<p>
					<label>Cuenta</label>
					<input class="form-control" type="text" name="login" placeholder="Nombre de la Cuenta" value="{{ old('login') }}">
				</p>
				<p>
					<label>Correo</label>
					<input class="form-control" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
				</p>
				<p>
					<label>Pregunta Secreta</label>
					<input class="form-control" type="text" name="secret_question" placeholder="Pregunta Secreta" value="{{ old('secret_question') }}">
				</p>
				<p>
					<label>Verification anti-bot</label>
					<div class="g-recaptcha" data-sitekey="{{ config('config.recaptcha.public') }}"></div>
				</p>			
			</div>
		</div>
		<div class="col col_6_of_12">
			<div id="login-form">
				<p>
					<label>Apodo</label>
					    <input class="form-control" type="text" name="pseudo" placeholder="Apodo del Juego" value="{{ old('pseudo') }}">
				</p>
				<p>
					<label>Contraseña</label>
					<input class="form-control" type="password" name="password" placeholder="Contraseña" value="{{ old('password') }}">
				</p>
				<p>
					<label>Respuesta Secreta</label>
					<input class="form-control" type="text" name="secret_answer" placeholder="Respuesta Secreta" value="{{ old('secret_answer') }}">
				</p>
			</div>
		</div>
		<div class="col col_12_of_12">
			<p><center><button type="submit" class="btn btn_blue">Enviar</button></center></p>
		</div>
	</form>
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection