@extends('layouts.app')

@section('content')
<div class="col-xs-8 col-xs-offset-2">
    @if ($check <= 5 && $check !== null)
       @include('strengths.posts', ['id' => $id])
    @else
    @endif
    <h2>投稿一覧</h2>
    @foreach($posts as $post)
    
	<h4>タイトル：{{ $post->title }}
		<small>投稿者：{{ $post->post_user->name }}</small>
		<small>投稿日：{{ date("Y年 m月 d日",strtotime($post->created_at)) }}</small>
	</h4>
	<p>{{ $post->content }}</p>
	
	{!! link_to_route('comments.show', '続きをみる', ['id' => $post->id],['class' => 'btn btn-info']) !!}
	<hr />

    @endforeach

</div>
@endsection