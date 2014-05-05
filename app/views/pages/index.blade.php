@extends('layouts/layout')

@section('content')
<div class="starter-template">
    <h1>
        {{ Auth::check() ? "Welcome, " . Auth::user()->username : "Why Don't You Sign Up?" }}
    </h1>

    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto commodi ea ex, itaque maxime nihil omnis rem. A aliquam, consequuntur delectus dolorem doloribus eligendi nemo officia rerum sequi unde!</p>
</div>
@stop