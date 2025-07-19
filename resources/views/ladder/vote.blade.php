@extends('master')

@section('title', 'Clasificación de Votos')

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
<table>
	<tbody>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Numero de Votos</th>
		</tr>
		@foreach ($accounts as $pos => $account)
		<tr>
			<td>{{ $pos+1 }}</td>
			<td><img width="30" src="{{ asset('style/img/avatar/'.$account->avatar.'.jpg') }}" /> {{ $account->pseudo }}</td>
			<td>{{ $account->votes }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection