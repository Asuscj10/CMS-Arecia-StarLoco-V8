@inject('lib', 'App\Library\Item')
@extends('master')

@section('content')
<div class="panel_title">
    <div>
        <h4>Buscar</h4>
    </div>
</div>

<form method="GET" action="{{ route('encyclopedie.search') }}">
    <input type="text" name="q" value="{{ old('q', $q ?? '') }}" placeholder="Buscar por nombre o descripción">
    <select name="category">
        <option value="">Todas las categorías</option>
        {{-- Ejemplo de categorías, reemplaza por las que tengas --}}
        <option value="arma" {{ (isset($category) && $category == 'arma') ? 'selected' : '' }}>Arma</option>
        <option value="armadura" {{ (isset($category) && $category == 'armadura') ? 'selected' : '' }}>Armadura</option>
        <option value="consumible" {{ (isset($category) && $category == 'consumible') ? 'selected' : '' }}>Consumible</option>
    </select>
    <input type="number" name="level" value="{{ old('level', $level ?? '') }}" placeholder="Nivel">
    <button type="submit">Buscar</button>
</form>

<table class="table_black">
    <thead>
        <tr>
            <th>Apariencia</th>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Nivel</th>
        </tr>
    </thead>
    <tbody> 
    @forelse ($items as $item)
        <tr>
            <td><img src="{{ $item->image ?? '' }}" alt="{{ $item->name }}" width="32"></td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->category }}</td>
            <td>{{ $item->level }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="4">No se encontraron resultados.</td>
        </tr>
    @endforelse
    </tbody>
</table>
{{ $items->links() }}
@endsection