@extends('_master')
@section('title')
Random User Generator
@stop
@section('content')
This page will generate random users for you to use! <br><br>

<p><form name="input" action='user-gen' method="post">
	Number of users (1-20):<input type="number" name="num_users" min="1" max="20">
	<input type="submit" value="Submit">
</form> 

<p><?php

	//on localhost: 

	//require_once 'C:\xampp\htdocs\P3\vendor\fzaninotto\Faker\src\autoload.php';

	//on live server: 

	require_once '\var\www\html\P3\vendor\fzaninotto\Faker\src\autoload.php';
	
	$faker = Faker\Factory::create();

	
	if (isset($_POST['num_users']))
{
	$numberofusers = $_POST['num_users'];

	for ($i=0; $i < $numberofusers; $i++) {
  	echo "Name = " . $faker->name, "<br>";
  	echo "Address = " . $faker->address, "<br>";
  	echo "Phone = " . $faker->phoneNumber, "<br>";
  	echo "E-mail = " . $faker->email, "<br><br>";
}

}

?>

@stop