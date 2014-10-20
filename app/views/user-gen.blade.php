@extends('_master')
@section('title')
Random User Generator
@stop
@section('content')
This page will generate random users for you to use! <br><br>

<?php

require_once 'C:\xampp\htdocs\P3\vendor\fzaninotto\Faker\src\autoload.php';

$faker = Faker\Factory::create();

echo $faker->name;

?>


@stop