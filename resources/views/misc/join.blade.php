@extends('master')

@section('title', 'Unete |')

@section('content')
<div class="panel_title">
    <div>
        <h4>Descargas</h4>
    </div>
</div>
<div class="col col_12_of_12">
	<div>
		<strong>¿Que es Dofus? </strong>
		<div>
			<br />
			<iframe width="640" height="360" src="https://www.youtube.com/embed/3eSEb7qS06A" frameborder="0" allowfullscreen></iframe>
			<br />
			<p>DOFUS es un juego de rol multijugador masivo en línea (MMORPG). En la provincia de Amakna, la desaparición de los preciados huevos de dragón "Dofus" ha perturbado la vida cotidiana de una población antaño pacífica. Mientras extraños fenómenos ocurren en los bosques de la provincia eterna, cientos de aventureros parten en busca de estos huevos con poderes mágicos.</p>
		</div>
		<div class="alert_message red" jquery="">
			<p>&#x26a0; Antes de utilizar nuestros sistemas/servicios, le invitamos a leer las condiciones generales de uso.</p>
		</div>
		<strong>Etapa N°1 : Crear una Cuenta</strong>
		<p>
			Para poder jugar en nuestros servidores y beneficiarse de los servicios del sitio, debe crear una cuenta.
			<a class="btn btn_blue btn_expand" href="{{ route('account.register') }}">Crear una cuenta.</a>
			Una vez creada tu cuenta podrás continuar.
		</p>
		<strong>Etapa N°2 : Instalar Dofus Nyeera</strong>
		<p>
			Nuestro servidor actualmente está ejecutando la versión 1.39.8 de Dofus, así que asegúrate de tener el cliente Dofus 1.39.8, si no, puedes elegir descargar el cliente completo, o el launcher en el paso 3.
			@foreach (config('config.link.client') as $name => $link)
			<a href="{{ $link }}" class="btn btn_blue btn_expand">Descargar el cliente ({{ $name }})</a>
			@endforeach
		</p>
		<strong>Etapa N°3 : Launcher {{ config('config.name') }}</strong>
		<p>
			Para conectarte a nuestros servidores de juego, es imprescindible tener los archivos actualizados. En nuestro caso, el programa instalará automáticamente todos los archivos necesarios para unirte al servidor. Esto te permitirá mantener tu juego actualizado. 
			@foreach (config('config.link.uplauncher') as $name => $link)
			<a href="{{ $link }}" class="btn btn_blue btn_expand">Descargar Launcher ({{ $name }})</a>
			@endforeach
		</p>
		<strong>F.A.Q</strong>
		<div class="alert_message red" jquery="">
			<p><b>¿Problema con la Instalación?</b><br />• Te invitamos a redirigirte al foro en la sección. <u>Soporte</u>.</p>
		</div>
		<div class="alert_message green">
			<p>Una vez realizadas las instalaciones, conéctate para pasar un rato agradable en nuestro servidor. {{ config('config.name') }}.</p>
		</div>
	</div>
</div>
@endsection