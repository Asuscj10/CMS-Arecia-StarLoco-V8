@extends('master')

@section('title', 'Drop')

@section('content')
<div class="panel_title">
    <div>
		<h4>Drop</h4>
	</div>
</div>
<div class="widget_title">
	<div class="tb_widget_search">
		<form>
			<input type="text" placeholder="Nombre de Objeto (En Fr)">
			<input type="submit" value="Buscar">
		</form>
	</div>
</div>
<br>
<table>
	<tbody>
		<tr>
			<th>Nombre del Objeto</th>
			<th>Nombre del mob</th>
			<th>Prospección</th>
			<th>%</th>
		</tr>
		<tr>
			<td>Pluma de Pio Azul</td>
			<td>Pio Azul<br>Pioch el Arenil</td>
			<td>0<br>0</td>
			<td>25 %<br>20 %</td>
		</tr>
	</tbody>
</table>
@endsection