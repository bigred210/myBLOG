@extends('layouts.master')


@section('head')
    <title>Create a Post</title>
    <link rel="stylesheet" href="/css/blog-create.css">
@stop

@section('content')

    <div class="container">
    <button type="button" class="create" data-toggle="modal" data-target="#createBlog"></button>
    <br><br>
    <a href="{{{action('PostsController@index')}}}" class="allBlogs"><img src='/img/allblogs.png'></a>
    

    <!-- Modal -->
    <div class="modal fade" id="createBlog" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
    <div>
        {{ Form::model($post,array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}

           
            {{ Form::text('title',$post->title, ['class'=>'title','value'=>"{{{ Input::old('title')}}}",'placeholder'=>'Title'])}}
            
            {{ $errors->first('title', '<span class="help-block">:message</span>') }}
            
            <br><br>
           
            {{ Form::textarea('body',$post->body, ['class'=>'body','value'=>"{{{ Input::old('body')}}}",'placeholder'=>'Body'])}}
           
            {{ $errors->first('body', '<span class="help-block">:message</span>') }}
            
            <br><br>
           
            <input type="submit">

        {{ Form::close() }}
    </div> <!-- end form -->

    </div> <!-- end container -->
@stop