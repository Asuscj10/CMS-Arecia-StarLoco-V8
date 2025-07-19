@extends('master')

@section('title', 'Noticias |')

@section('content')
<!-- Post -->
<article class="post">
    <!-- Media -->
    <div class="entry_media">
        <a class="popup_link"><img src="{{ asset('style/img/news/big/'.$post->image.'.jpg') }}" alt="Image"></a>
    </div>
    <!-- End Media -->
    <!-- Full meta -->
    <div class="full_meta clearfix">
        <span class="meta_format"><i class="fa fa-file-text"></i></span>
        <span class="meta_date">{{ date_format(date_create($post->date), 'd/m/Y') }}</span>
        <span class="meta_comments"><a>{{ $count }} Commentaires</a></span>
    </div>
    <!-- End Full meta -->
    <!-- Entry content -->
    <div class="entry_content">
    	<!-- Entry title -->
        <h1 class="entry_title">{{ $post->title }}</h1>
        <!-- End Entry title -->
        <p class="dropcap">{!! $post->text !!}</p>
    </div>
    <!-- End Entry content -->
 </article>
<!-- End Post -->
<!-- Comments -->
<div id="comments">
    <div class="panel_title">
        <div>
            <h4><a>{{ $count }} Comentarios</a></h4>
        </div>
    </div>
    <ol class="comment_list">
        @foreach ($comments as $comment)
        <li>
            <article>
                <div class="comment_avatar"><img src="{{ asset('style/img/avatar/'.$comment->account->avatar.'.jpg') }}" alt="Avatar"></div>
                <div class="comment_overflow">
                    <div class="comment_meta">
                        <h5><a>{{ $comment->account->pseudo }}</a></h5>
                        <span>{{ date_format(date_create($comment->date), 'd/m/Y à H\hi') }}</span>
                    </div>
                    <div class="comment_content">{!! $comment->text !!}</div>
                </div>
            </article>
        </li>
        @endforeach
    </ol>
</div>
@include('pagination', ['paginator' => $comments])
<!-- End Comments -->
@if (Auth::check())
<!-- Respond -->
<div id="respond">
    <h3>Escribe un Comentario</h3>
    <form method="post" action>
    	{{ csrf_field() }}
        <p>
            <label>Comentario<span>*</span></label>
            <textarea name="comment"></textarea>
        </p>
        <input type="submit" value="Poster" class="btn btn_blue">
    </form>
</div>
<!-- End Respond -->
@endif
@endsection