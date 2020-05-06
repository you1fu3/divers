@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>資質TO5の登録</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'signup2.post']) !!}
               
                <div class="form-group">
                    {!! Form::label('strength[0]', '資質１位') !!}
                    {!! Form::select('strength[0]', $strengths) !!}
                 <div class="form-group">
                    {!! Form::label('strength[1]', '資質２位') !!}
                    {!! Form::select('strength[1]', $strengths) !!}
                 <div class="form-group">
                    {!! Form::label('strength[2]', '資質３位') !!}
                    {!! Form::select('strength[2]', $strengths) !!}
                 <div class="form-group">
                    {!! Form::label('strength[3]', '資質４位') !!}
                    {!! Form::select('strength[3]', $strengths) !!}
                 <div class="form-group">
                    {!! Form::label('strength[4]', '資質５位') !!}
                    {!! Form::select('strength[4]', $strengths) !!}

                {!! Form::submit('Sign up', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection