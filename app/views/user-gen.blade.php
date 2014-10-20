@extends('_master')
@section('title')
Random User Generator
@stop
@section('content')
This page will generate random users for you to use!

<?php

echo random_uagent()

?>


@stop