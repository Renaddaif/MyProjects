<?php 

  session_start();
 
  // Check if the user is already logged in, if yes then redirect him to control page
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
      header("location: admin/Admin.php");
      exit;
    }
	
	// connect to dataBase
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

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title>YUM-Admin control</title> 
    <link rel="stylesheet" href="Css.css"> 
   </head> 
<body> 
    <header> 
        <div class="logo"> 
            <img src="https://i.postimg.cc/JntvPyrs/logo-removebg-preview.png" alt="logo"> 
        </div> 
        <div class="menu"> 
            <ul> 
                <li><a href="index.php">Home</a></li> 
                <li><a href="about.php">About</a></li> 
				<li><a href="Myazu.php">Item details</a></li>
                <li><a href="Login.php">Log out</a></li> 
            </ul> 
        </div> 
    </header> 
	<div class="controladmin">
	<article>
        <p class="p_cPanal">Control Panel</p>
        <div class="conBoX">
            <a href="../admin/Add.php" class="action-button">Add</a>
            <a href="../admin/Edit.php" class="action-button">Edit</a>
            <a href="../admin/Delete.php" class="action-button">Delete</a>
        </div>
    </article>
	</div>
	<br><br><br><br> 
 
	 <footer> 
 
 <p><h5>Yum</h5></p> 
    <p>  contact us</p> 
 <p>☏+966536864436</p> 
    <p><a href="mailto:Yum@gmail.com">✉️ Yum@gmail.com</a></p> 
 <p>&copy Reema Aldawsari,Renad Alzahrani,Shahad bin judia,Ghaliah Alsubaie</p> 
     
    </footer> 
</body>
</html>