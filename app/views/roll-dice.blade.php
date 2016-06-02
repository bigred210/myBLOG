@extends('layouts.master')

@section('title')

@section('content')
    <h1>Hello, Welcome to my Roll Dice view!</h1>
        <p>Your guess is : {{{$guess}}}!</p>
        <p>The roll equals = {{{$roll}}}!</p>
        <h3><?php echo $message; ?></h3>
@stop

