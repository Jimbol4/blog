@extends('layouts.app')
@section('content')
    <div class="jumbotron">
        <h1>Blog Articles</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>

@if (count($posts))
@foreach ($posts as $post)
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
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