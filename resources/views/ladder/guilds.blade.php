@inject('lib', 'App\Library\Guild')

@extends('master')

@section('title', 'Ladder guildes')

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
                <option value="{{ $id }}" @if (Request::input('serveur') == $id) selected @endif>
                    {{ $server['name'] }}
                </option>
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
            <th>Emblema</th>
            <th>Servidor</th>
            <th>Nivel</th>
            <th>Lider</th>
            <th>Numero de Miembros</th>
        </tr>
        @foreach ($guilds as $pos => $guild)
        <tr>
            <td>{{ $pos + 1 }}</td>
            <td><a href="#">{{ $guild->name }}</a></td>
            <td>{!! $lib->getEmblem($guild->emblem, 25) !!}</td>
            <td>
                @php
                    $serverList = config('config.servers');
                @endphp
                @if(isset($serverList[$guild->server]))
                    {{ $serverList[$guild->server]['name'] }}
                @else
                    <span style="color:red;">Servidor desconocido</span>
                @endif
            </td>
            <td>{{ $guild->lvl }}</td>
            <td>
                @php
                    $leader = App\Models\GuildMember::where('guild', $guild->id)->where('rank', 1)->first();
                @endphp
                {{ $leader ? $leader->name : 'Sin líder' }}
            </td>
            <td>{{ number_format($guild->members()->count(), 0, '.', ' ') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
