@extends('layouts.app')
@section('content')
<h1>Create a post</h1>

    {!! Form::model($post, ['method' => 'PATCH', 'action' => ['PostController@update', $post->id]]) !!}
       
    @include('partials.form', ['submitButton' => 'Update post'])
    
    {!! Form::close() !!}
@endsection