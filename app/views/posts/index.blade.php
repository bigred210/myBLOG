@extends('layouts.master')


@section('head')
    <title>Show all Posts</title><form>
    <link rel="stylesheet" href="/css/blog-index.css">
@stop

@section('content')
    @include("posts.postsNav")
    <div class="container">
        <div class="logo col-sm-4 col-sm-offset-1">
            <img src="/../img/laying.png">
        </div>
        @foreach ($posts as $post)
            <br><br>         
                <div class="row">
                    <div class="blogs col-xs-12 col-sm-4 col-sm-offset-2">
                        <div>
                            <h2><a href="{{{action('PostsController@show',$post->id)}}}">{{{ $post->title }}}</a></h2>
                            <h4>Written by: {{{ $post->user->username }}}</h4>
                            <p><small> - Posted on : {{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}};</small></p>
                            <p><small> - Updated on : {{$post->updated_at->setTimezone('America/Chicago')->diffForHumans()}};</small></p> 
                        </div> <!-- endo of for-each -->    
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            <br><br>   
        @endforeach
        <div class="pages">
            <p >{{ $posts->links() }}</p>
        </div>
    </div> <!-- end of container -->
@stop