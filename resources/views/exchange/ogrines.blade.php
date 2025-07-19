@extends('master')

@section('title', 'Intercambio de Ogrinas')

@section('content')
<div class="panel_title">
    <div>
        <h4>Intercambio de Ogrinas</h4>
    </div>
</div>
<ul class="products clearfix">
    {{-- Producto 1 --}}
    <li class="product first">
        <div class="item_thumb">
            <div class="thumb_hover">
                <a href="#"><img src="{{ asset('style/img/shop/ogrines/b_ogrines_100.png') }}" alt="Ogrinas 100"></a>
            </div>
        </div>
        <div class="info">
            <span class="price">
                <span class="amount">1.00 $</span>
            </span>
        </div> {{-- End Info --}}
        <a href="#" class="btn">Comprar</a>
    </li>{{-- Producto 2 --}}
    <li class="product">
        <div class="item_thumb">
            <div class="thumb_hover">
                <a href="#"><img src="{{ asset('style/img/shop/ogrines/b_ogrines_200.png') }}" alt="Ogrinas 200"></a>
            </div>
        </div><div class="info">
            <span class="price">
                <span class="amount">1.99 $</span>
            </span>
        </div><a href="#" class="btn">Comprar</a>
    </li>{{-- Producto 3 --}}
    <li class="product">
        <div class="item_thumb">
            <div class="thumb_hover">
                <a href="#"><img src="{{ asset('style/img/shop/ogrines/b_ogrines_500.png') }}" alt="Ogrinas 500"></a>
            </div>
        </div><div class="info">
            <span class="price">
                <span class="amount">3.98 $</span>
            </span>
        </div><a href="#" class="btn">Comprar</a>
    </li>{{-- Producto 4 --}}
    <li class="product last">
        <div class="item_thumb">
            <div class="thumb_hover">
                <a href="#"><img src="{{ asset('style/img/shop/ogrines/b_ogrines_800.png') }}" alt="Ogrinas 800"></a>
            </div>
        </div><div class="info">
            <span class="price">
                <span class="amount">5.97 $</span>
            </span>
        </div><a href="#" class="btn">Comprar</a>
    </li>{{-- Producto 5 --}}
    <li class="product first">
        <div class="item_thumb">
            <div class="thumb_hover">
                <a href="#"><img src="{{ asset('style/img/shop/ogrines/b_ogrines_1000.png') }}" alt="Ogrinas 1000"></a>
            </div>
        </div><div class="info">
            <span class="price">
                <span class="amount">7.96 $</span>
            </span>
        </div><a href="#" class="btn">Comprar</a>
    </li>{{-- Producto 6 --}}
    <li class="product">
        <div class="item_thumb">
            <div class="thumb_hover">
                <a href="#"><img src="{{ asset('style/img/shop/ogrines/b_ogrines_1300.png') }}" alt="Ogrinas 1300"></a>
            </div>
        </div><div class="info">
            <span class="price">
                <span class="amount">9.95 $</span>
            </span>
        </div><a href="#" class="btn">Comprar</a>
    </li>{{-- Producto 7 --}}
    <li class="product">
        <div class="item_thumb">
            <div class="thumb_hover">
                <a href="#"><img src="{{ asset('style/img/shop/ogrines/b_ogrines_1700.png') }}" alt="Ogrinas 1700"></a>
            </div>
        </div><div class="info">
            <span class="price">
                <span class="amount">13.93 $</span>
            </span>
        </div><a href="#" class="btn">Comprar</a>
    </li>{{-- Producto 8 --}}
    <li class="product last">
        <div class="item_thumb">
            <div class="thumb_hover">
                <a href="#"><img src="{{ asset('style/img/shop/ogrines/b_ogrines_2000.png') }}" alt="Ogrinas 2000"></a>
            </div>
        </div><div class="info">
            <span class="price">
                <span class="amount">15.00 $</span>
            </span>
        </div><a href="#" class="btn">Comprar</a>
    </li></ul>
@endsection