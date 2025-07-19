@inject('lib', 'App\Library\Item')

@extends('master')

@section('title', 'Enciclopedia')

@section('style')
<link rel="stylesheet" href="{{ asset('style/css/ankama.css') }}">
@endsection

@section('content')
<div class="panel_title">
    <div>
		<h4>{{ $item->name }}</h4>
	</div>
</div>
<div class="product">
   	<div class="images">
        <img src="{{ asset('style/img/items_SVG/'.$item->type.'/'.$item->GFX.'.svg') }}"/>
    </div>
	<div class="summary">
		<div class="alert_message green"><p><b>Categoria</b> : {{ $lib->getCategory($item->type) }}</p></div>
		<div class="alert_message blue"><p><b>Nivel</b> : {{ $item->level }}</p></div>
    
	    <div class="description">
	    	<h3>➲ <b>Descripcción</b></h3>
	        <p>{{ $item->description }}</p>
	    </div>
	    @if ($item->statsTemplate != null)
	    <div class="effect">
	    	<h3>➲ <b>Effets</b></h3>
			<table class="ak-list-carac">
				<tbody>{!! $lib->getTemplate($item->statsTemplate) !!}</tbody>
			</table>
		</div>
		@endif
		@if ($item->armesInfos != null)
		<div class="caractéristique">
			<h3>➲ <b>Caractéristiques</b></h3>
			<tbody>{!! $lib->weaponCarac($item->armesInfos) !!}</tbody>
		</div>
		@endif
		@if ($item->conditions != null)
		<div class="condition">
			<h3>➲ <b>Conditions</b></h3>
			<table>
				<tbody>{!! $lib->conditions($item->conditions) !!}</tbody>	
			</table>
		</div>
		@endif
		@if ($item->craft != null)
		<div class="craft">
			<h3>➲ <b>Receta</b></h3>
		<div class="alert_message purple" jquery="">
			<p><b>Oficio</b> : Joyero</p>
		</div>
			<table>
				<thead>
					<tr>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apariencia</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nom</a></font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Categoria</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nivel</font></font></th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td><img src="{{ asset('style/img/items_PNG/'.$object->id.'.png') }}" width="60px" height="60px"/></td>
					<td>{{ $object->name }}</td>
					<td><i>{{ $lib->getCategory($object->type) }}</i></td>
					<td>Niv.{{ $object->level }}</td>
				</tbody>
			</table>
		</div>
		@endif
		@if ($item->itemset != null)
		<div class="itemsets">
			<div class="alert_message yellow" jquery=""><b>Panoplie :</b> {{ $item->itemset->name }}</div>
			<table class="ak-list-carac">
				<thead>
					<tr>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apariencia</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre</a></font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Categoria</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nivel</font></font></th>
					</tr>
				</thead>
				<tbody>
					@php
					$other_objects = App\Models\Item::where('panoplie', $item->itemset->ID)->orderBy('level')->get();
					@endphp
					@foreach ($other_objects as $object)
					<tr>
						<td><img src="{{ asset('style/img/items_PNG/'.$object->id.'.png') }}" width="60px" height="60px"/></td>
						<td><a href="{{ route('encyclopedie.object', [$item->id, str_slug($item->name)]) }}">{{ $object->name }}</a></td>
						<td><i>{{ $lib->getCategory($object->type) }}</i></td>
						<td>Niv.{{ $object->level }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		@endif
	</div>
</div>
@endsection