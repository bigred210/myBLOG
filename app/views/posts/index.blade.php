@extends('layouts.master')


@section('title')
    <title>Show all Posts</title><form>
@stop

@section('content')
    <h1>Show the Post</h1>
@foreach ($posts as $post)
    <p>{{{ $post['title'] }}}</p>
    <p>{{{ $post['body'] }}}</p>
    <p>--------------------</p>
@endforeach 
@stop