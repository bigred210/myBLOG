@extends('layouts.master')

@section('head')
    <title>My Projects</title>
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
            <h1>Projects</h1>
            <h2>Click on designated button below to either Play/Use the project or to View the code.</h2>
        </div><!--end of jumbotron-->
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <div class="thumbnail projects">
                    <a href="#"><img class="img-responsive img-rounded" src="/../img/simplewars.png"></a>
                    <div class="caption">
                        <h3>SIMPLE WARS</h3> 
                        <p>Using HTML,CSS and JS you are able to play my version of a SIMON SAYS game.</p>
                        <p><a href="#" class="btn btn-primary" role="button">PLAY</a> <a href="#" class="btn btn-primary" role="button">CODE</a></p>
                    </div><!-- caption end -->
                </div><!-- thumbnail end -->
            </div><!-- col end -->
            <div class="col-xs-12 col-md-4">
                <div class="thumbnail projects">
                    <a href="#"><img class="img-responsive img-rounded" src="/../img/servername.png"></a>
                    <div class="caption">
                        <h3>KUNG FU GENERATOR</h3> 
                        <p>Using PHP,HTML,CSS,and JS you are able to generate a random style of Kung Fu for Po to learn.</p>
                        <p><a href="#" class="btn btn-primary" role="button">USE</a> <a href="#" class="btn btn-primary" role="button">CODE</a></p>
                    </div><!-- caption end -->
                </div><!-- thumbnail end -->
            </div><!-- col end -->
            <div class="col-xs-12 col-md-4">
                <div class="thumbnail projects">
                    <a href="#"><img class="img-responsive img-rounded" src="/../img/whackamole.png"></a>
                    <div class="caption">
                        <h3>WHACK-A-WALKER</h3> 
                        <p>Using HTML,CSS,and JS you are able to play my version of a Whack-A-Mole game.</p>
                        <p><a href="#" class="btn btn-primary" role="button">PLAY</a> <a href="#" class="btn btn-primary" role="button">CODE</a></p>
                    </div><!-- caption end -->
                </div><!-- thumbnail end -->
            </div><!-- col end -->
        </div><!--end of row-->
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <div class="thumbnail projects">
                    <a href="#"><img class="img-responsive img-rounded" src="/../img/calculator.png"></a>
                    <div class="caption">
                        <h3>CALCULATOR</h3> 
                        <p>Using HTML,CSS,and JS you are able to use a simple calculator. It also plays a hidden gif. </p>
                        <p><a href="#" class="btn btn-primary" role="button">USE</a> <a href="#" class="btn btn-primary" role="button">CODE</a></p>
                    </div><!-- caption end -->
                </div><!-- thumbnail end -->
            </div><!-- col end -->
            <div class="col-xs-12 col-md-4">
                <div class="thumbnail projects">
                    <a href="#"><img class="img-responsive img-rounded" src="/../img/weathermap.png"></a>
                    <div class="caption">
                        <h3>WEATHER MAP</h3> 
                        <p>Using HTML,CSS,and JS w/ an API from Google to get a 3 day forecast. </p>
                        <p><a href="#" class="btn btn-primary" role="button">USE</a> <a href="#" class="btn btn-primary" role="button">CODE</a></p>
                    </div><!-- caption end -->
                </div><!-- thumbnail end -->
            </div><!-- col end -->
            <div class="col-xs-12 col-md-4">
                <div class="thumbnail projects">
                    <a href="#"><img class="img-responsive img-rounded" src="/../img/comingsoon.jpg"></a>
                    <div class="caption">
                        <h3>COMING SOON</h3> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et.</p>
                        <p><a href="#" class="btn btn-primary" role="button">PLAY</a> <a href="#" class="btn btn-primary" role="button">CODE</a></p>
                    </div><!-- caption end -->
                </div><!-- thumbnail end -->
            </div><!-- col end -->
        </div><!--end of row-->
    </div><!--end of container-->
    
@stop
