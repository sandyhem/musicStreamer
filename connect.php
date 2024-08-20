<?php
$host="localhost";
$user="root";
$pwd="";
$db="music";
$connect=mysqli_connect($host,$user,$pwd,$db);
if(!$connect){
    die("connection failed:".mysqli_connect_error());
}
?>