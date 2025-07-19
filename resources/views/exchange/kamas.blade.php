@extends('master')

@section('title', 'Bolsa de Kamas')

@section('content')
<div class="panel_title">
    <div>
        <h4>Intercambio de Kamas</h4>
    </div>
</div>
<div class="alert_message grey">
	<p><b>'¿Que es esto?'</b> : El Intercambio de Kamas es un sistema de venta de kamas por ogrinas que puedes usar en el servidor.<br>También puedes vender kamas para obtener ogrinas, sabiendo que se toman 1.000 kamas por 1 Ogrina.</p>
</div>
<table>
   	<tbody>
        <tr>
            <th>Oferta</th>
            <th>Kamas</th>
			<th>Precio</th>
			<th>Disponible</th>
			<th>Comprar</th>
        </tr>
		<tr>
            <td>1</td>
			<td>25 000 <img src="{{ asset('style/img/icones/kamas.png') }}"></td>
			<td>40 <img src="{{ asset('style/img/icones/ogrines.png') }}"></td>
			<td>si</td>
			<td><a href="">Comprar</a></td>
        </tr>
	</tbody>
</table>
@endsection