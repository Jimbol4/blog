@extends('layouts.app')
@section('content')
<h1>Create a post</h1>

    {!! Form::model($post = new \App\Post, ['action' => 'PostController@store']) !!}
       
    @include('partials.form', ['submitButton' => 'Create new post'])
    
    {!! Form::close() !!}
@endsection