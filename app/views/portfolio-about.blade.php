@extends('layouts.master')

@section('head')
    <title>About</title>
    <link href='https://fonts.googleapis.com/css?family=Audiowide&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/../css/mainportfolio.css">
    <link rel="stylesheet" href="/../css/aboutphp.css">
    <link rel="stylesheet" href="/../css/portfoliophp.css">
    @include("portfolioheader")
@stop
@section('content')
    @include ("portfolionav")
    <div class="container">
        <div class="jumbotron">
            <h1>
                A little about me ...
            </h1> 
            <!-- insert links to github/linkedIN/Emailform -->
        </div><!--end of jumbotron-->

        <div class="row aboutpics">
            <div class="col-xs-12 col-md-4">
                <img class="img-responsive img-rounded" src="/../img/alaina.jpg">
            </div><!-- col end -->
            <div class="col-xs-12 col-md-4">
                <img class="img-responsive img-rounded" src="/../img/family.jpg">
            </div><!-- col end -->
            <div class="col-xs-12 col-md-4">
                <img class="img-responsive img-rounded" src="/../img/aedan.jpg">
            </div><!-- col end -->
        </div> <!--end of row-->

        <div class="row">
            <div class="col-xs-6">
                <p>
                    I am a current student with the ambition of becoming a software programmer.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. 
                </p>
            </div><!-- col end -->
            <div class="col-xs-6">
                <p>
                    I am a Father, Husband and Student with the ambition of becoming a software programmer.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. 
                </p>
            </div><!-- col end -->
        </div> <!--end of row-->
    </div><!--end of container-->

@stop