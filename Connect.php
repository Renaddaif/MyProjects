<?php
 $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "yum";

  // Create connection
  $conn = new mysqli($servername, $username, $password,'yum' );
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
   
 ?>