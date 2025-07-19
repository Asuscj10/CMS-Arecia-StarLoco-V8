@inject('lib', 'App\Library\Player')

@extends('master')

@section('title', 'Clasificacón de Oficios|')

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
			<option value="all" selected>Seleccione un Servidor</option>
			@foreach (config('config.servers') as $id => $server)
			<option value="{{ $id }}" @if (Request::input('serveur') == $id) selected @endif>{{ $server['name'] }}</option>
			@endforeach
		</select>
	</div>
	<br />
	<div class="quantity buttons_added">
		<select class="cart" style="width: 100%; height: 34px; padding: 3px 6px!important;" name="job">
			<option value="all" selected="selected">Seleccione un Oficio</option>
			@foreach ($lib->jobs as $id => $name)
			<option value="{{ $id }}">{{ $name }}</option>
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
			<th>Servidor</th>
			<th>Oficio</th>
			<th>Experiencia</th>
		</tr>
		@foreach ($players as $pos => $player)
		<tr>
			<td>{{ $pos + 1 }}</td>
			<td><img src="{{ asset('style/img/persos/race/heads/'.$player['class'].'_'.$player['sexe'].'.png') }}" /> {{ $player['name'] }}</td>
			<td>{{ config('config.servers')[$player['server']]['name'] }}</td>
			<td width="30">
				<object type="application/x-shockwave-flash" data="{{ asset('style/flash/jobs/'.$player['job'].'.swf') }}" width="30" height="30">
					<param name="movie" value="{{ asset('style/flash/jobs/'.$player['job'].'.swf') }}" />
					<param name="quality" value="high" />
					<param name="wmode" value="transparent" />
				</object>
			</td>
			<td>{{ number_format($player['experience'], 0, '.', ' ') }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection