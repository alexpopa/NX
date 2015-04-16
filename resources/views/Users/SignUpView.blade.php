@extends('master')

@section('main_content')
    <h1>Sign Up Page!</h1>

    {!! Form::open(['route' => 'users_store_path', 'method' => 'POST']) !!}
        <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
            {!! Form::label('username', 'User Name:') !!}
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

        <!-- Todo, put in a confirm password -->

        <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
            {!! Form::label('phone', 'Phone:') !!}
            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
            {!! $errors->first('phone', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('birthday') ? 'has-error' : '' }}">
            {!! Form::label('birthday', 'Birthday:') !!}
            {!! Form::input('date', 'birthday', null, ['class' => 'form-control']) !!}
            {!! $errors->first('birthday', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
            {!! Form::label('gender', 'Gender:') !!}
            {!! Form::select('gender', [null, 'M', 'F'], null, ['class' => 'form-control']) !!}
            {!! $errors->first('gender', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('building') ? 'has-error' : '' }}">
            {!! Form::label('building', 'Building:') !!}
            {!! Form::text('building', null, ['class' => 'form-control']) !!}
            {!! $errors->first('building', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('floor') ? 'has-error' : '' }}">
            {!! Form::label('floor', 'Floor:') !!}
            {!! Form::text('floor', null, ['class' => 'form-control']) !!}
            {!! $errors->first('floor', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('apartment') ? 'has-error' : '' }}">
            {!! Form::label('apartment', 'Apartment:') !!}
            {!! Form::text('apartment', null, ['class' => 'form-control']) !!}
            {!! $errors->first('apartment', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('job') ? 'has-error' : '' }}">
            {!! Form::label('job', 'Job:') !!}
            {!! Form::text('job', null, ['class' => 'form-control']) !!}
            {!! $errors->first('job', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('hometown') ? 'has-error' : '' }}">
            {!! Form::label('hometown', 'Home Town:') !!}
            {!! Form::text('hometown', null, ['class' => 'form-control']) !!}
            {!! $errors->first('hometown', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('aboutme') ? 'has-error' : '' }}">
            {!! Form::label('aboutme', 'About Me:') !!}
            {!! Form::textarea('aboutme', null, ['class' => 'form-control']) !!}
            {!! $errors->first('aboutme', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('motto') ? 'has-error' : '' }}">
            {!! Form::label('motto', 'Motto:') !!}
            {!! Form::text('motto', null, ['class' => 'form-control']) !!}
            {!! $errors->first('motto', '<span class="help-block">:message</span>') !!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        </div>        
    {!! Form::close() !!}

@endsection