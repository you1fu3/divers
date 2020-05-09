{!! Form::open(['route' => 'strengths.post']) !!}
    <div class="form-group">
        {!! Form::label('title', 'タイトル') !!}
        {!! Form::text('title',old('title'), ['class' => 'form-control', 'rows' => '1']) !!}
    </div> 
    <div class="form-group">
        {!! Form::label('content', '本文') !!}
        {!! Form::textarea('content',old('content') , ['class' => 'form-control', 'rows' => '2']) !!}
    </div> 
    <div class="form-group">
        {!! Form::hidden('strength_id', $id) !!}
     </div>   
     <div class="form-group">
        {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
    </div> 
{!! Form::close() !!}
　　<hr/>