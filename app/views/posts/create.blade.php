@extends('layouts.master')


@section('title')
    <title>Create a Post</title><form>
@stop

@section('content')
    <h1>Create a Post</h1>

    <form method="post" action='{{{ action('PostsController@store') }}}'>
      Title:<br>
        <input type="post" name="title" value="{{{ Input::old('title') }}}"placeholder="Enter Title"><br>
      Blog Body:<br>
        <input type="post" name="body" value="{{{ Input::old('body') }}}"placeholder="Enter Body"><br><br>
        <input type="submit">
    </form>
@stop