@extends('layouts.master')


@section('head')
    <title>Edit Post</title>
    <link rel="stylesheet" href="/css/blog-create.css">
@stop
@section('content')
        @include("posts.postsNav")
            <!-- create blog post -->
        <div class="section" id="createBlog">
            <div class="container">
                <div class="row">

                    <div class="form col-xs-12 col-md-6 col-md-offset-3">
                        {{ Form::open(array('action' => array('PostsController@update', $post->id))) }}
                            {{ Form::text('title', $post->title, ['class'=>'title','value'=>"{{{ Input::old('title')}}}"])}}
                            {{ $errors->first('title', '<span class="help-block">:message</span>') }}
                            <br><br>

                    </div><!-- end col / form -->
                </div><!-- end row  -->
                <div class="row">
                    <div class="form col-xs-12 col-md-6 col-md-offset-3">
                    <img class="robot" src="/../img/robot-look.png">
                </div>
                    <div class="form col-xs-12 col-md-6 col-md-offset-3">
                            {{ Form::textarea('body', $post->body, ['class'=>'body','value'=>"{{{ Input::old('body')}}}"])}}
                            {{ $errors->first('body', '<span class="help-block">:message</span>') }}
                            <br><br>

                            <input class="submit" type="submit">
                            <button id="delete" class="btn btn-danger" type="submit">Delete Post</button>
                        {{ Form::close() }}
                    </div><!-- end col / form -->
                      {{ Form::model($post, array('action' => array('PostsController@destroy',$post->id), 'method' => 'DELETE')) }}
        
    {{ Form::close() }}
    <!-- the hidden form for deleting a post using javascript. -->
    <!-- the click listener is on the submit button id delete-post-btn.. -->
    {{ Form::open([
        'action' => ['PostsController@destroy', $post->id],
        'id'     => 'delete-post-form',
        'method' => 'DELETE',
    ]) }}
    {{ Form::close() }}
                </div><!-- end row  -->
            </div><!-- end container -->
        </div> <!-- end section -->
@stop

@section('bottom-script')
<script type="text/javascript" src="/js/blog.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
@stop