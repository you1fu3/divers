{!! Form::open(['route' => 'comments.post']) !!}
    
    <div class="form-group">
        {!! Form::textarea('comment',old('comment') , ['class' => 'form-control', 'rows' => '1']) !!}
    </div> 
    <div class="form-group">
        {!! Form::hidden('post_id', $id) !!}
     </div>   
     <div class="form-group">
        {!! Form::submit('コメントする', ['class' => 'btn btn-primary']) !!}
    </div> 
{!! Form::close() !!}
　　<hr/>