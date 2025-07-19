@extends('master')

@section('title', 'Vota & Gana |')

@section('content')
<div class="panel_title">
    <div>
       	<h4>Vota & Gana</h4>
    </div>
</div>
<div class="col col_12_of_12">
	<div class="alert_message green">
		<b>¿Cómo puedo votar?</b><br>
		• Todo lo que tienes que hacer es ir a la dirección del enlace y poner los números o letras que te piden.<br>
	</div>
	<figure class="wp-caption alignleft">
		<img src="{{ asset('./style/img/pictures/eni.png') }}" alt="Image" class="visible animated"/>
	</figure>
	<p>
		Votar por <b>{{ config('config.name') }}</b> tiene como objetivo mejorar el servidor y por tanto garantizar su evolución.<br />
		Cuando votas, verás que tus puntos aumentan en <b>{{ config('config.points.vote') }} points</b> por voto.
	</p>
	<form method="post" action>
		{{ csrf_field() }}
		<center><button type="submit" class="btn btn_blue" onclick="window.open('http://rpg-paradize.com/?page=vote&amp;vote={{ config('config.rpg') }}');">Votar</button></center>
	</form>
</div>
@endsection