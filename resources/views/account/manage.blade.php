@extends('master')

@section('title', 'Mi Cuenta |')

@section('content')
<div class="panel_title">
    <div>
        <h4>Mi Cuenta</h4>
    </div>
</div>
<center>
    <a class="btn btn_blue" href="{{ route('account.manage') }}">Mas Información</a>
    <a class="btn btn_blue" href="{{ route('exchange.ogrines') }}">Intercambio de Ogrina</a>
    <a class="btn btn_blue" href="{{ route('shop.all') }}">Gran Bazar</a>
</center>
<center>
    <div class="col_9_of_12">
        <table>
            <tbody>
                <tr>
                    <td>Cuenta</td><td>{{ Auth::user()->account }}</td>
                </tr>
                <tr>
                    <td>Contraseña</td><td>*******</td>
                </tr>
                <tr>
                    <td>Correo e-m@il</td><td>{{ Auth::user()->email }}</td>
                </tr>
                <tr>
                    <td>Apodo</td><td>{{ Auth::user()->pseudo }}</td>
                </tr>
                <tr>
                    <td>Numero de Voto(s)</td><td>{{ Auth::user()->votes }}</td>
                </tr>
                <tr>
                    <td>Numero de Punto(s)</td><td>{{ Auth::user()->points }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</center>
<div class="col col_12_of_12">
    <h1 class="page_title">Mis Personajes</h1>
    <table>
        <tbody>
            <tr>
                <th>#</th>
                <th>Apodo</th>
                <th>Nivel</th>
                <th>Alineamiento</th>
                <th>Servidor</th>
            </tr>
            @foreach ($players as $player)
            <tr>
                <td><img src="{{ asset('style/img/persos/race/heads/'.$player->class.'_'.$player->sexe.'.png') }}" /></td>
                <td><a href="">{{ $player->name }}</a></td>
                <td>{{ $player->level }}</td>
                <td><img src="{{ asset('style/img/persos/align/'.$player->alignement.'.png') }}" /></td>
                <td>
                    @if(isset(config('config.servers')[$player->server]['name']))
                        {{ config('config.servers')[$player->server]['name'] }}
                    @else
                        Servidor Desconocido
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="col col_12_of_12">
    <h1 class="page_title">Cambiar Mi Contraseña</h1>
    <div id="login-form">
    <form method="post" action>
        {{ csrf_field() }}
        <p>
            <label>Contraseña Anteior</label>
            <input class="form-control" name="old_password" value="{{ old('old_password') }}" type="password" placeholder="Contraseña">
        </p>
        <p>
            <label>Pregunta Secreta</label>
            <input class="form-control" value="{{ Auth::user()->question }}" disabled>
        </p>
        <p>
            <label>Respuesta Secreta</label>
            <input class="form-control" name="secret_answer" value="{{ old('secret_answer') }}" type="text" placeholder="Respuesta Secreta">
        </p>
        <p>
            <label>Nueva Contraseña</label>
            <input class="form-control" name="new_password" value="{{ old('new_password') }}" type="password" placeholder="Nueva Contraseña">
        </p>
        <p>
            <label>Repetir</label>
            <input class="form-control" name="conf_password" value="{{ old('conf_password') }}" type="password" placeholder="Repetir Contraseña">
        </p>
        <p><center><button type="submit" class="btn btn_blue">Aceptar</button></center></p>
    </form>
    </div>
</div>
@endsection
