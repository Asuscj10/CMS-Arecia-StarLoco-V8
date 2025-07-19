@extends('master')

@section('title', 'El Mundo de los Doce |')

@section ('style')
<link rel="stylesheet" href="{{ asset('style/maps/css/map.css') }}">

@section('content')
<div class="panel_title">
    <div>
        <h4>El Mundo de los Doce</h4>
    </div>
</div>
<div class="col col_12_of_12">
    <p>
        <img src="{{ asset('style/img/pictures/map.png') }}"alt="images" class="visible animated">
	</p>
</div>
@endsection