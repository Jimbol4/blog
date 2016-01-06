@extends('layouts.app')
@section('content')
    <div class="jumbotron">
        <h1>Blog Articles</h1>
        <p>Welcome to The Blog! The most exciting place on the web! Join the conversation!</p>
        <p><a class="btn btn-primary btn-lg" href="{{ URL::to('posts/create') }}" role="button">Create post &raquo;</a></p>
    </div>

@if (count($posts))
@foreach ($posts as $post)
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="{{ URL::to('posts/' . $post->id) }}">{{ $post->title }}</a></div>

                <div class="panel-body">
                    <p>{{ $post->abstract }} <a href="{{ URL::to('posts/' . $post->id)  }}">Read more</a></p>
                    <p>Posted by: {{ $post->user->name }} on {{ $post->created_at->toFormattedDateString()}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@else 

<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">No posts found</div>

                <div class="panel-body">
                    Create a new post by clicking <a href="{{ URL::to('posts/create') }}">here</a>.
                </div>
            </div>
        </div>
    </div>
</div>

@endif

@endsection