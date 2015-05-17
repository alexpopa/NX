@extends('app')

@section('header_content')
<style>
label
{
    font-weight: bold;
}
</style>
@endsection

@section('content')
    <h1>Sign Up Page!</h1>

    {!! Form::open(['method' => 'POST', 'role' => 'form']) !!}        
        <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
            {!! Form::label('username', 'Username:') !!}
            {!! Form::text('username', null, ['class' => 'form-control']) !!}
            {!! $errors->first('username', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::input('email', 'email', null, ['class' => 'form-control']) !!}
            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
            {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
            {!! Form::label('password_confirmation', 'Confirm Password:') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
            {!! $errors->first('password_confirmation', '<span class="help-block">:message</span>') !!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        </div>        
    {!! Form::close() !!}

@endsection