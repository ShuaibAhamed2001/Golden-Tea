<?php 
$con = mysqli_connect("localhost:3306","root","","teadb");

if(!$con){ 
  die("Could not connect to DB server.Please try again");
}
?>