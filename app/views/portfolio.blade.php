@extends('layouts.master')

@section('head')
    <title>Portfolio</title>
    <link href='https://fonts.googleapis.com/css?family=Audiowide&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/../css/mainportfolio.css">
    <link rel="stylesheet" href="/../css/aboutphp.css">
    <link rel="stylesheet" href="/../css/portfoliophp.css">
    @include("portfolioheader")
@stop
@section('content')
    @include ("portfolionav")

    <div class=" col-xs-12">
        <div>
            <video autoplay="true" loop="true">
                <source src="img/twirl.mp4" type="video/mp4">
            </video>
        </div> <!-- end of div "video" -->
        <div class="main container">
            <div class="row">
                <div class=" col-xs-12">
                    <p class="name">
                        Jerod West
                    </p>
                    <p class="motto">
                        ...Building a dream one line at a time...
                    </p>
                    <p class="title">
                        Current Web Developer student looking for internships & career opportunities
                    </p>
                </div> <!-- col end -->
            </div><!-- row end -->
        </div> <!-- end of div "main" -->    
    </div> <!-- end of div "container" -->
@stop





