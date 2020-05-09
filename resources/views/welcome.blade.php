@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::user()->name }}ログイン中
        @include('strengths.index')
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>様々な個性を発見しよう</h1>
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection