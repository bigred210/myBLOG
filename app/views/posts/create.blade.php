@extends('layouts.master')


@section('head')
    <title>Create a Post</title>
    <link rel="stylesheet" href="/css/blog-create.css">
@stop

@section('content')
    <h1>Create a Post</h1>
    <form method="POST" action="{{{ action('PostsController@store') }}}">
        <input type="text" class="title" name="title" value="{{{ Input::old('title') }}}" placeholder="Blog Title">
        <br><br>
        <textarea rows="4" cols="50" class="body" name="body" placeholder="Start Blog'n">{{{ Input::old('body') }}}</textarea>
        <br><br>
        <input type="submit">
    </form>
@stop