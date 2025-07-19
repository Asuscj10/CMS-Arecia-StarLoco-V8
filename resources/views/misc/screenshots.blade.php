@extends('master')

@section('title', 'Screenshots |')

@section('content')
<div class="panel_title">
    <div>
        <h4>Screenshots</h4>
    </div>
</div>
<div class="col col_12_of_12">
    <p>
    	@foreach ($screenshots as $screenshot)
		<a href="{{ asset('/style/img/screenshots/'.$screenshot->src.'.png') }}" class="popup_link">
			<img src="{{ asset('/style/img/screenshots/'.$screenshot->src.'.png') }}" alt="images" class="visible animated" width="269" height="203">
		</a>
		@endforeach
	</p>
	@include('pagination', ['paginator' => $screenshots])
</div>
@endsection