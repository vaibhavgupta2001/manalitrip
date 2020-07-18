<?php

$username="root";
$password="";
$server= 'localhost';
$db = 'vaibhav';


$con = mysqli_connect($server,$username,$password,$db);

if($con){
  ?>
  <script >
  alert("connection successful");

  </script>


  <?php
}else{
  echo "connection failed";
}



 ?>
