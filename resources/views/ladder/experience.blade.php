@inject('lib', 'App\Library\Player')

@extends('master')

@section('title', 'Clasificación PVM')

@section('content')
<div class="panel_title">
    <div>
        <h4>Clasificación</h4>
    </div>
</div>
<center>
	<a class="btn btn_blue" href="{{ route('ladder.exp') }}">PVM</a>
	<a class="btn btn_blue" href="{{ route('ladder.honor') }}">PVP</a>
	<a class="btn btn_blue" href="{{ route('ladder.guilds') }}">Gremios</a>
	<a class="btn btn_blue" href="{{ route('ladder.vote') }}">Votos</a>
	<a class="btn btn_blue" href="{{ route('ladder.jobs') }}">Oficios</a>
</center>
<form class="cart" method="get" action>
	<div class="quantity buttons_added">
		<select class="cart" style="width: 100%; height: 34px; padding: 3px 6px!important;" name="serveur">
			<option value="all" selected>Seleccione un Servidor.</option>
			@foreach (config('config.servers') as $id => $server)
			<option value="{{ $id }}" @if (Request::input('serveur') == $id) selected @endif>{{ $server['name'] }}</option>
			@endforeach
		</select>
	</div>
	<br />
	<div class="quantity buttons_added">
		<select class="cart" style="width: 100%; height: 34px; padding: 3px 6px!important;" name="breed">
			<option value="all" selected>Selecciona una Clase.</option>
			@foreach ($lib->breeds as $id => $breed)
			<option value="{{ $id }}" @if (Request::input('breed') == $id) selected @endif>{{ $breed }}</option>
			@endforeach
		</select>
	</div>
	<br />
	<input type="submit" id="submit" value="Filtrar" class="btn btn_blue">
</form>
<table>
	<tbody>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Clase</th>
			<th>Servidor</th>
			<th>Nivel</th>
			<th>Experiencia</th>
		</tr>
		@foreach ($players as $pos => $player)
		<tr>
			<td>{{ $pos+1 }}</td>
			<td><a href="">{{ $player->name }}</a></td>
			<td><img src="{{ asset('style/img/persos/race/heads/'.$player->class.'_'.$player->sexe.'.png') }}" /></td>
			<td>{{ config('config.servers')[$player->server]['name'] }}</td>
			<td>{{ $player->level }}</td>
			<td>{{ number_format($player->xp, 0, '.', ' ') }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection