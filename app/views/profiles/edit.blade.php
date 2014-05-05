@extends('layouts/layout')

@section('content')
	<h1>Edit Profile</h1>

	{{ Form::model($user->profile, ['method' => 'PATCH', 'route' => ['profile.update', $user->username]]) }}
		<!-- Location Field -->
		<div class="form-group">
			{{ Form::label('location', 'Location:') }}
			{{ Form::text('location', null, ['class' => 'form-control']) }}
			{{ errors_for('location', $errors) }}
		</div>

		<!-- Bio Field -->
		<div class="form-group">
			{{ Form::label('bio', 'Bio:') }}
			{{ Form::textarea('bio', null, ['class' => 'form-control']) }}
			{{ errors_for('bio', $errors) }}
		</div>

		<!-- Twitter_username Field -->
		<div class="form-group">
			{{ Form::label('twitter_username', 'Twitter_username:') }}
			{{ Form::text('twitter_username', null, ['class' => 'form-control']) }}
			{{ errors_for('twitter_username', $errors) }}

		</div>

		<!-- Github_username Field -->
		<div class="form-group">
			{{ Form::label('github_username', 'Github_username:') }}
			{{ Form::text('github_username', null, ['class' => 'form-control']) }}
			{{ errors_for('github_username', $errors) }}
		</div>

		<!-- Update Profile Field -->
		<div class="form-group">
			{{ Form::submit('Update Profile', ['class' => 'btn btn-primary']) }}
		</div>
	{{ Form::close() }}

@stop