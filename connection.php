<?php

$host="localhost";
$user="root";
$pass="";
$db_name="fruits";

$conn = mysqli_connect($host,$user,$pass,$db_name);

//for checking the connection
if(!$conn){
die("Connection failed: ".mysqli_conn_error());
}




?>