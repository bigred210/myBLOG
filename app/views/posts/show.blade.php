@extends('layouts.master')

@section('head')
    <title>Show a Post</title>
    <link rel="stylesheet" href="/css/blog-show.css">
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-md-offset-3">
                <p>{{{ $post->title }}}</p>
                <p>Written by: {{{ $post->user->username }}}</p>
                <p>{{{ $post->body }}}</p>
                <p><small> - Posted on : {{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}};</small></p>
                <p><small> - Updated on : {{$post->updated_at->setTimezone('America/Chicago')->diffForHumans()}};</small></p>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
@stop