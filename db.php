<?php

$server="localhost";
$user="root";
$pass="";
$db="traveldream";

$conn=mysqli_connect($server,$user,$pass,$db);

if(!$conn){

die("Error connexio");

}

?>
