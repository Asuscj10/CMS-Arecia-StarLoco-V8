@inject('lib', 'App\Library\Item')

@extends('master')

@section('title', 'Enciclopedia - Armas')

@section('content')
<div class="panel_title">
    <div>
		<h4>Enciclopedia</h4>
	</div>
</div>
<form class="woocommerce-ordering" method="get" action>
		<select name="cat" class="orderby">
			<option value="all" selected="selected">Selecciona una Categoria</option>
			@foreach ($weaponsCategories as $cat)
        <option value="{{ $cat }}" @if (Request::input('cat') == $cat) selected @endif>{{ $lib->getCategory($cat) }}</option>
        @endforeach
		</select>
	<button style="width: 100px; height: 41px; margin: -4px 5px 0px 0;" type="submit" class="btn btn_blue">Aceptar</button>
</form>
<table class="table_black">

	<thead>
		<tr>
			<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apariencia</font></font></th>
			<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre</a></font></font></th>
			<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Categoria</font></font></th>
			<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nivel</font></font></th>
		</tr>
	</thead>
	<tbody>	
	@foreach ($items as $pos => $item)
	@php
	$pos++;
	@endphp
        <tr>
            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><img style="height: 48px; width: 48px" src="{{ asset('style/img/items_PNG/'.$item->id.'.png') }}"/></font></font></td>
            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="{{ route('encyclopedie.object', [$item->id, str_slug($item->name)]) }}">{{ $item->name }}</a></font></font></td>
            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $lib->getCategory($item->type) }}</font></font></td>
            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $item->level }}</font></font></td>
        </tr>
	<tbody>
	@endforeach
</table>
@include('pagination', ['paginator' => $items])
@endsection