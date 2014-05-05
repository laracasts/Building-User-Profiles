@extends('layouts/layout')

@section('content')
	@if ($user->profile)
		<h1>{{ $user->username }} <small>{{ $user->profile->location }}</small></h1>
		<div class="bio">
			<p>
				{{ $user->profile->bio }}
			</p>
		</div>

		<ul class="links">
			<li>{{ link_to('http://twitter.com/' . $user->profile->twitter_username, 'Find Me On Twitter') }}</li>
			<li>{{ link_to('http://github.com/' . $user->profile->github_username, 'View My Work On GitHub') }}</li>
		</ul>

		@if ($user->isCurrent())
			{{ link_to_route('profile.edit', 'Edit Your Profile', $user->username) }}
		@endif
	@else
		<p>No profile yet.</p>
	@endif
@stop