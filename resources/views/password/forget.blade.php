@extends('master')

@section('title', '¿Olvidaste tu contraseña? |')

@section('content')
<div class="panel_title">
    <div>
        <h4>¿Olvidaste tu contraseña? - Etapa 1</h4>
    </div>
</div>
<div class="col col_12_of_12">
	<form method="post" action>
		{{ csrf_field() }}
		<p>
			<label>Nombre de la Cuenta</label>
			<input class="form-control" type="text" name="login" placeholder="Cuenta" value="{{ old('login') }}">
		</p>
		<p>
			<label>Verification anti-bot</label>
			<div class="g-recaptcha" data-sitekey="{{ config('config.recaptcha.public') }}"></div>
		</p>			
		<p><center><button type="submit" class="btn btn_blue">Aceptar</button></center></p>
	</form>
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection