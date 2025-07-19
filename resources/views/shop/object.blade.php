@inject('lib', 'App\Library\Item')

@extends('master')

@section('title', 'El Gran Bazar |')

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
        <img src="{{ asset('style/img/items_SVG/'.$item->type.'/'.$item->GFX.'.svg') }}" width="60px" height="60px"/>
    </div>
    <div class="summary">
        <div class="alert_message grey">
            <p><b>Categoría</b> : {{ $lib->getCategory($item->type) }}</p>
            <p><b>Nivel</b> : {{ $item->level }}</p>
        </div>
        <div class="alert_message blue">
            <p><b>Precio</b> : {{ $item->points }} <img src="{{ asset('style/img/icones/ogrines.png') }}"/></p>
        </div>
        <form class="cart" method="post" action>
            <div>
                <label>Seleccionar un personaje</label>
                <select class="cart" style="width: 100%; height: 34px; padding: 3px 6px!important;" name="player">
                    @foreach ($players as $player)
                    <option value="{{ $player->id }}">{{ $player->name }}</option>
                    @endforeach
                </select>
            </div>
            <br/ >
            <button type="submit" class="btn btn_blue btn_expand">Comprar</button>
        </form>
    </div>
    <div class="woocommerce-tabs">
        <div class="tab_content">
            <ul class="clearfix">
                <li><h4><a href="#tabs_1">Descripción</a></h4></li>
                <li><h4><a href="#tabs_2">Características</a></h4></li>
                @if ($item->panoplie != '0')
                <li><h4><a href="#tabs_3">Set</a></h4></li>
                @endif
                @if ($item->itemset != null)
                @endif
                <li><h4><a href="#tabs_4">Condiciones</a></h4></li>
                
            </ul>
            <div id="tabs_1">
                <p>{{ stripslashes($item->description) }}</p>
            </div>
            <div id="tabs_2">
                <table class="ak-list-carac">
                    <tbody>
                        {!! $lib->getTemplate($item->statsTemplate) !!}
                    </tbody>
                </table>
            </div>
            @if ($item->itemset != null)
            <div id="tabs_3">
                <h3>{{ $item->itemset->name }}</h3>
                <table class="ak-list-carac">
                    <tbody>
                        @php
                        $other_objects = App\Models\Item::where('panoplie', $item->itemset->ID)->orderBy('level')->get();
                        @endphp
                        @foreach ($other_objects as $object)
                        <tr>
                            <td><img src="{{ asset('style/img/items_PNG/'.$object->id.'.png') }}" width="60px" height="60px"/></td>
                            <td>{{ $object->name }}</td>
                            <td><i>{{ $lib->getCategory($object->type) }}</i></td>
                            <td>Niv.{{ $object->level }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
            <div id="tabs_4">
            <table>
                <tbody>
                {!! $lib->conditions($item->conditions) !!}         
                </tbody>    
            </table>
            </div>
        </div>
    </div>
</div>
@endsection