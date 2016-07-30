@extends('layouts.master')

@section('head')
    <title>{{{ $post->title }}}</title>
    <link rel="stylesheet" href="/css/blog-show.css">
@stop

@section('content')
    @include("posts.postsNav")
    @if(Auth::check())
        <div class="container">
            <div class="row">
                <div class="show col-sm-12 col-sm-4 col-sm-offset-2">
                    <h1>{{{ $post->title }}}</h1>
                    <p>Written by: {{{ $post->user->username }}}</p>
                    <p>{{{ $post->body }}}</p>
                    <p><small> - Posted on : {{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}};</small></p>
                    <p><small> - Updated on : {{$post->updated_at->setTimezone('America/Chicago')->diffForHumans()}};</small></p>
                    @if(Auth::id() == $post->user_id)
                        <div>
                            <a href="{{{action('PostsController@edit', $post->id)}}}" class="btn btn-custom navbut">Edit</a>
                        </div>
                    @endif
                </div> <!-- end of col -->
                <div class="logo col-sm-4 col-sm-offset-1">
                    <img src="/../img/posts.png">
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    @endif
@stop