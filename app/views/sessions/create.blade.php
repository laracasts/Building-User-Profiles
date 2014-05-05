@extends('layouts/layout')

@section('meta-title', 'Login')

@section('content')
    <h1>Log In</h1>

    {{ Form::open(['route' => 'sessions.store']) }}
        <!-- Email Field -->
        <div class="form-group">
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email', null, ['class' => 'form-control']) }}
            {{ errors_for('email', $errors) }}
        </div>

        <!-- Password Field -->
        <div class="form-group">
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
            {{ errors_for('password', $errors) }}
        </div>
        
        <!-- Log In! Field -->
        <div class="form-group">
            {{ Form::submit('Log In!', ['class' => 'btn btn-primary']) }}
        </div>

        @if (Session::has('flash_message'))
            <div class="form-group">
                <p>{{ Session::get('flash_message') }}</p>
            </div>
        @endif
    {{ Form::close() }}
    
@stop