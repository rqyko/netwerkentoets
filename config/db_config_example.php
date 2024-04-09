<?php

$dbhost = 'localhost:3306';
$dbuser = 'netwerken_user_2024';
$dbpass = 'netwerken2024!';
$dbname = 'side_job_registration';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>