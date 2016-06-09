@extends('layouts.master')

@section('head')
    <title>LOGIN</title>
    <link rel="stylesheet" href="/css/blog-login.css">
@stop
@section('content')
        @include("posts.postsNav")
            <!-- login -->
        <div class="container">
            <div class="row">
                <div class="login col-sm-6 col-md-4 col-md-offset-2">
                    <h2>Login here!</h2>
                        {{ Form::open(array('action' => 'HomeController@goLogin')) }}
                            {{ Form::text('username', null, ['class'=>'username','value'=>"{{{ Input::old('username')}}}",'placeholder'=>'Username'])}}
                            {{ $errors->first('title', '<span class="help-block">:message</span>') }}
                            <br><br>
                            {{ Form::password('password', ['class'=>'password','value'=>"{{{ Input::old('password')}}}",'placeholder'=>'Password'])}}
                            {{ $errors->first('body', '<span class="help-block">:message</span>') }}
                            <br><br>
                            <button class="submit" type="submit">submit</button>
                        {{ Form::close() }}
                </div><!-- end col / form -->
                <div class="logo  col-sm-6 col-md-4 col-xs-offset-1">
                    <img src="/../img/login.png">
                </div>
            </div><!-- end row  -->
        </div><!-- end container -->
@stop