<?php 
// var_dump(Auth::user()->name);
// var_dump(Session::all());
?>

@if(Auth::check())
    <nav class="navbar navbar-default navbar navbar-inverse">
        <div class="form-group signinbut">
            <a href="#" class="btn btn-custom navbut">Hello, {{ Auth::user()->username }}</a>
        </div>
        <div class="form-group signinbut">
            <a href="/logout" type="submit" class="btn btn-custom navbut">Log Out</a>
        </div>
        <div class="form-group signinbut">
            <a href="/posts/create" class="btn btn-custom navbut">Create</a>
        </div>
        <div class="form-group signinbut">
            <a href="/posts" class="btn btn-custom navbut">Blogs</a>
        </div>
        <div class="navlogo">
           <a href="/posts" type="submit" class="nav-home"><img src="/../img/logo.png"></a>
        </div>
    </nav>
@else
    <nav class="navbar navbar-default navbar navbar-inverse">
        <div class="form-group signinbut">
            <a href="/login" type="submit" class="btn btn-custom navbut">Log In</a>
        </div>
        <div class="form-group signinbut">
            <a href="/posts" class="btn btn-custom navbut">Blogs</a>
        </div>
        <div class="navlogo">
           <a href="/posts" type="submit" class="nav-home"><img src="/../img/logo.png"></a>
        </div>
    </nav>
@endif

    