@extends('_master')
@section('title')
Lorem Ipsum Generator
@stop
@section('content')
<h1>Lorem Ipsum Generator</h1>
On this page you can generate Lorem Ipsum text. <br><br>

<form name="input" action='lorem' method="post">
	Paragraphs (1-20):<input type="number" name="paragraphs" min="1" max="20">
	<input type="submit" value="Submit">
</form>

<p>

<?php 

//Attempt at creating form with laravel:

//Form::input('number', 'paragraphs')

//echo Form::number('paragraphs, ')

if (isset($_POST['paragraphs']))
{
$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs($_POST['paragraphs']);
echo implode('<p>', $paragraphs);

}
@stop
?>