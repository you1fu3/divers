@extends('layouts.app')

@section('content')
<div class="col-xs-8 col-xs-offset-2">
    <h2>投稿</h2>
    <div>
	
        <h4>タイトル：{{ $post->title }}
	     	<small>投稿者：{{ $post->post_user->name }}</small>
		    <small>投稿日：{{ date("Y年 m月 d日",strtotime($post->created_at)) }}</small>
     	</h4>
	    <p>{{ $post->content }}</p>
    
    </div>
    <hr />
    <div>

    @foreach($comments as $comment)
		<small>投稿者：{{ $comment->user->name }}</small>
		<small>投稿日：{{ date("Y年 m月 d日",strtotime($comment->created_at)) }}</small>
     	<p>{{ $comment->comment }}</p>
    </div>
    <hr />
    @endforeach
    @if ($check <= 5 && $check !== null)
       @include('comments.posts', ['id' => $id])
    @endif
</div>
@endsection