<div class='form-group'>
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
    </div>
    
    <div class='form-group'>
        {!! Form::label('text', 'Post text:') !!}
        {!! Form::textarea('text', null, ['class' => 'form-control', 'required']) !!}
    </div>
    
    <div class='form-group'>
        {!! Form::submit($submitButton, ['class' => 'form-control btn btn-primary']) !!}
    </div>

    @include('errors.list')