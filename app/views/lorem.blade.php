@extends('_master')
@section('title')
Lorem Ipsum Generator
@stop
@section('content')
<h1>Lorem Ipsum Generator</h1>
On this page you can generate Lorem Ipsum text. <br><br>
<?php 

$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs(2);
echo implode('<p>', $paragraphs);

?>
@stop