@extends('_master')
@section('title')
Random User Generator
@stop
@section('content')
This page will generate random users for you to use! <br><br>

<p><form name="input" action='lorem' method="post">
	Number of users (1-20):<input type="number" name="users" min="1" max="20">
	<input type="submit" value="Submit">
</form>

<?php

	require_once 'C:\xampp\htdocs\P3\vendor\fzaninotto\Faker\src\autoload.php';

	$faker = Faker\Factory::create();

	//this for loop creates multiple instance, but not the way I want it--yet.
	for ($i=0; $i < 10; $i++) {
  	echo $faker->name, "\n";
}

?>

<p>Name:</p><?php echo $faker->name; ?><br><br>

<p>Address:</p><?php echo $faker->address; ?><br><br>

<?php echo $faker->phoneNumber; ?><br><br>




@stop