@extends('layouts.master')


@section('head')
    <title>Create a Post</title>
    <link rel="stylesheet" href="/css/blog-create.css">
@stop
@section('content')

            <!-- create blog post -->
        <div class="section3" id="createBlog">
            <div class="container">
                <div class="row">

                    <div class="form col-xs-12 col-md-6 col-md-offset-3">
                        {{ Form::open(array('action' => 'PostsController@store')) }}
                            {{ Form::text('title', null, ['class'=>'title','value'=>"{{{ Input::old('title')}}}",'placeholder'=>'Title'])}}
                            {{ $errors->first('title', '<span class="help-block">:message</span>') }}
                            <br><br>

                    </div><!-- end col / form -->
                </div><!-- end row  -->
                <div class="row">
                    <div class="form col-xs-12 col-md-6 col-md-offset-3">
                    <img class="robot" src="/../img/robot-look.png">
                </div>
                    <div class="form col-xs-12 col-md-6 col-md-offset-3">
                            {{ Form::textarea('body', null, ['class'=>'body','value'=>"{{{ Input::old('body')}}}",'placeholder'=>'Type Blog Post Here'])}}
                            {{ $errors->first('body', '<span class="help-block">:message</span>') }}
                            <br><br>

                            <input class="submit" type="submit">
                        {{ Form::close() }}
                    </div><!-- end col / form -->
                </div><!-- end row  -->
            </div><!-- end container -->
        </div> <!-- end section -->

@stop