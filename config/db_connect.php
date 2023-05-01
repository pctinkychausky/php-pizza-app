<?php

// connect to database

$conn = mysqli_connect("localhost", "jason", "y2756089", "ninja_pizza");

//check connection

if(!$conn){
	echo "Connection error: " . mysqli_connect_error();
}
?>