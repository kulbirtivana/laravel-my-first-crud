@extends('layout')

{{--the title will be unique for each section--}}
@section('title')
Create Tweet Form
@endsection

{{--the content will be unique for each section--}}
@section('content')

<h1>Create Tweet Form</h1>

<p>Fill out this form to create a Tweet!</p>

{{--display errors--}}

<div role="alert">
@if ( $errors->any() )
<ul>
@foreach ( $errors->all() as $error )
<li>{{ $error }}</li>
@endforeach
</ul>
@endif
</div>

<form method="post" action="{{ route('tweets.store') }}">
@csrf
{{--Cross-site request forgery protection--}}
<label for="message">
<strong>Input a Message:</strong>
<textarea name="message" id="message" cols="30" rows="10"></textarea>
</label>
<label for="author">
<strong>Author name:</strong>
<input type="text" name="author" id="author">
</label>
<input type="submit" Value="Publish Tweet">
</form>
@endsection
