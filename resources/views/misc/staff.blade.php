@inject('lib', 'App\Library\Staff')

@extends('master')

@section('title', 'Staff|')
<link rel="stylesheet" href="{{ asset('style/css/ankama.css') }}">
@section('style')

@endsection

@section('content')
<div class="panel_title">
    <div>
        <h4>Soporte y Administración</h4>
    </div>
</div>
<div class="alert_message green" jquery="">
    <b>¿Cómo contactar a un miembro del equipo?</b><br>
    • Para contactar a un miembro del equipo, simplemente escribe lo siguiente en el canal general "/w [APODO] [TEXTO]", te dara una atención rapida si esta conectado. De no ser asi simplemente rellena un formulario en Discord. Una vez que recibamos tu mensaje, procesaremos tu solicitud lo antes posible.<br>
</div>
<div class="alert_message red" jquery="">
    &#x26a0; Por favor, no hagas "flood" a un miembro del equipo si no responde a tu solicitud; es posible que ya estén ocupados con otra petición, así que sé paciente y espera tu turno.
</div>
@foreach ($staffs as $cat => $members)
<h5>{{ $lib->getCategory($cat) }}</h5>
<table class="ak-server-list ak-list-perso">
    <tbody>
        <tr>
            <th>Apodo</th>
            <th>Conectado</th>
            <th>Servidor</th>
        </tr>
        @foreach ($members as $member)
        @php
        $logged = ($member->account->logged) ? true : false ;
        @endphp
        <tr>
            <td><img width="35" src="{{ asset('style/img/avatar/'.$member->avatar.'.jpg') }}" /> <a>{{ $member->name }}</a></td>
            <td class="statut @if ($logged) statut_on @else statut_off @endif"><span></span><font color="@if ($logged) green @else red @endif">@if ($logged) Conectado @else Desconectado @endif</font></td>
            @if ($member->server != 0)
            <td class="server server_{{ $member->server }}"><span></span>{{ config('config.servers')[$member->server]['name'] }}</td>
            @else
            <td></td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
@endforeach
@endsection