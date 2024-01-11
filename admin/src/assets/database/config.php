<?php 

$server="localhost";
$username="root";
$dbpass="";
$dbname="stationary";

$connection=mysqli_connect($server,$username,$dbpass,$dbname);
if(!$connection){
    die("Failed to connect");
}
// else{
//     echo"connected";
// }
?>