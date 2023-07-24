<?php
{
$host="localhost";
$username="root";
$password="";
$database="crobott_db";
// $con=mysqli_connect('localhost','root','','crobott_db');
// $con = mysqli_connect($host, $username, $password,$database);
$con = new mysqli($host, $username, $password,$database);


if(!$con){
    die("conection error:".mysql_connect_error());    
}

}
?>