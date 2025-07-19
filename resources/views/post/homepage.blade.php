@inject('lib', 'App\Library\Post')

@extends('master')

@section('content')
@if (!Request::has('page') || Request::input('page') == 1)
<div class="content_slider">
    <ul>
        @foreach ($fav_posts as $post)
        <li>
            <a href="{{ route('post', [$post->id, str_slug($post->title)]) }}"><img src="{{ asset('style/img/news/big/'.$post->image.'.jpg') }}" alt="Slider"></a>
            <div class="slider_caption">
                <div class="thumb_meta">
                    <span class="category" jQuery><a href="{{ route('post', [$post->id, str_slug($post->title)]) }}">{{ $lib->getCategory($post->type) }}</a></span>
                    <span class="comments"><a href="{{ route('post', [$post->id, str_slug($post->title)]) }}">{{ $post->comments()->count() }} Commentaire(s)</a></span>
                </div>
                <div class="thumb_link">
                    <h3><a href="{{ route('post', [$post->id, str_slug($post->title)]) }}">{{ $post->title }}</a></h3>
                </div>
            </div>
        </li>
        @endforeach
   	</ul>
</div>
@endif
<div class="panel_title">
    <div>
        <h4>Noticias</h4>
    </div>
</div>
<div class="row">
    <div class="col col_12_of_12">
        <div class="multipack clearfix">
        	@foreach ($posts as $post)
            <div class="layout_post_1">
                <div class="item_thumb">
                    <div class="thumb_hover">
                        <a href="{{ route('post', [$post->id, str_slug($post->title)]) }}"><img src="{{ asset('style/img/news/'.$post->image.'.jpg') }}" alt="Post"></a>
                    </div>
                    <div class="thumb_meta">
                        <span class="category" jQuery><a href="{{ route('post', [$post->id, str_slug($post->title)]) }}">{{ $lib->getCategory($post->type) }}</a></span>
                        <span class="comments"><a href="{{ route('post', [$post->id, str_slug($post->title)]) }}">{{ $post->comments()->count() }} Commentaire(s)</a></span>
                    </div>
                </div>
                <div class="item_content">
                    <h4><a href="{{ route('post', [$post->id, str_slug($post->title)]) }}">{{ $post->title }}</a></h4>
                    <p>{{ str_limit($post->text, 200) }}</p>
                </div>
            </div>
            @endforeach                     
        </div>
        @include ('pagination', ['paginator' => $posts])
    </div>
</div>
@endsection