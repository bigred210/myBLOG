@extends('layouts.master')


@section('head')
    <title>Create a Post</title>
    <link rel="stylesheet" href="/css/blog-missing.css">
@stop
@section('content')
    @include("posts.postsNav")
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="robot col-sm-4 col-sm-offset-2">
                    <img class="jumbo" src="/../../img/404robot.png">
                </div><!-- end col -->
                <div class="404 col-sm-4 col-sm-offset-1">
                    <img class="jumbo" src="/../../img/404page.png">
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end jumbotron -->
    </div> <!-- end container -->
@stop
