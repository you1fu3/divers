@foreach ($strengths as $strength)
    {!! link_to_route('strengths.get', $strength->strength, ['id' => $strength->id],['class' => 'btn btn-light']) !!}
@endforeach