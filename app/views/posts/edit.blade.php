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
                        {{ Form::model($post, array('action' => array('PostsController@update', $post->id),'method'=>'PUT')) }}
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
                       
                    {{ Form::close() }}
                </div><!-- end col / form -->
                
                    {{-- telling the server where the information is being sent to. in this case postscontroller@destroy  which is a method to delete that post.  Look below.  its important to note that there are 2 forms. the delete-post-btn form requires fields to be filled in.  the click listener for the delete button listens for the click on the delete button but then submits the second form.  the delete-posts-form which has no fields.  therefore submitting emtpy fields and running delete post id. essentially deleting it from the database. --}}
    {{ Form::model($post, array('action' => array('PostsController@destroy',$post->id), 'method' => 'DELETE')) }}
        <button id="delete-post-btn" class="btn btn-block btn-danger" type="submit">Delete Post</button>
    {{ Form::close() }}
    <!-- the hidden for for deleting a post using javascript. -->
    <!-- the click listener is on the submit button id delete-post-btn on the form above.  but the below form is what is submitted and deleted...only other portion of this code is in the javascript -->
    {{ Form::open([
        'action' => ['PostsController@destroy', $post->id],
        'id'     => 'delete-post-form',
        'method' => 'DELETE',
    ]) }}
    {{ Form::close() }}

</section>
@stop
@section('bottom-script')
{{-- ensure the javascript is visibe to this page for the delete fiasco --}}
<script type="text/javascript" src="/js/blog.js"></script>
{{-- script for the text markdown editor --}}
<script>tinymce.init({ selector:'textarea' });</script>
@stop