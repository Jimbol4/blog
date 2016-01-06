@extends('layouts.app')
@section('content')
<div class="panel-primary">
    
    <div class="panel-heading">{{ $post->title  }}</div>
    
    <div class="panel-body">
        <p>{{ $post->text }}</p>
        
        <p>Posted by: {{ $post->user->name }} on {{ $post->created_at->toFormattedDateString()}}</p>
        @if (\Auth::check())
        @if ($post->user_id == \Auth::user()->id)
         {!! Form::model($post, ['method' => 'DELETE', 'action' => ['PostController@destroy', $post->id]]) !!}
    
    <div class='form-group'>
        <a href="{{ action('PostController@edit', $post->id) }}" class="btn btn-primary">Edit</a>
        {!! Form::submit('Delete', ['class' => 'btn btn-primary']) !!}
    </div>
    
    {!! Form::close() !!}
        @endif
        @endif
    </div>
    
</div>
@endsection