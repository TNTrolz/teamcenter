<?php

$dbhost = "frwahxxknm9kwy6c.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbuser = "fmu4ieohjmewbjfd";
$dbpass = "fekoasfrp0di8mep";
$dbname = "dfh2u480sqojog1h";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$con){
	echo 'Connection Error: ' . mysqli_connect_error();
}
