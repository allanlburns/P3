@extends('_master')
@section('title')
Lorem Ipsum Generator
@stop
@section('content')
<h1>Lorem Ipsum Generator</h1>
On this page you can generate Lorem Ipsum text. <br><br>

<form action='lorem.blade.php' method='POST'>
	Paragraphs (1-20):<input type="number" name="paragraphs" min="1" max="20">
	<input type="submit" value="Submit">
</form>
<p>

<?php 

//echo Form::number('paragraphs, ')

$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs(_$POST);
echo implode('<p>', $paragraphs);

?>
@stop