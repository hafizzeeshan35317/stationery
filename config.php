<?php 
$server="localhost";
$username="root";
$dbpass="";
$dbname="stationary";


$con= mysqli_connect($server,$username,$dbpass,$dbname);

if(!$con){
die("failed to connect database");

}


?>