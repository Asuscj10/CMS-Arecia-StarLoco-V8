@extends('master')

@section('title', 'Actualizaciones |')

@section('content')
<div class="panel_title">
    <div>
        <h4>Actualizaciones</h4>
    </div>
</div>
@foreach ($updates as $update)
@php
$color = ($update->id%2) ? 'aliceblue': 'antiquewhite' ;
@endphp
<div class="accordion_content ui-accordion ui-widget ui-helper-reset" role="tablist">
    <h4 class="accordion_content_title ui-accordion-header ui-state-default ui-corner-all" style="background: {{ $color }};" role="tab" id="ui-id-{{ $update->id }}" aria-controls="ui-id-{{ $update->id }}" aria-selected="false" aria-expanded="true" tabindex="0">Actualización {{ $update->version }}</h4>
    <div class="accordion_content_inner ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" style="background: {{ $color }};" id="ui-id-{{ $update->id }}" aria-labelledby="ui-id-{{ $update->id }}" role="tabpanel" aria-hidden="true" style="display: none;">
        <ul>
        	@foreach (explode('#', $update->content) as $content)
            <li>{{ $content }}</li>
            @endforeach
        </ul>
	</div>
</div>
@endforeach
@endsection