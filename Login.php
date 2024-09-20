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
   
// Define variables and initialize with empty values
  $username = $password = "";
  $username_err = $password_err = "";
 
// Processing form data when form is submitted
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    if(empty($username_err) && empty($password_err)) {
      // Prepare a select statement
      $sql = "SELECT * FROM admin WHERE username = '$username' ";

      $result = $conn->query($sql);


      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $saved_password = $row['password'];

        if ($password === $saved_password) {
          // Store data in session variables
          $_SESSION["loggedin"] = true;
          $_SESSION["id"] = $id;
          $_SESSION["username"] = $username;

          // Redirect user to welcome page
          header("location: admin/Admin.php");
        } else {
          // Display an error message if password is not valid
          $password_err = "The password you entered was not valid.";
        }
      } else {
        $username_err = "No account found with that username.";
      }
    }

    // Close connection
    $conn->close();
  }
?>

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title>YUM - Login</title> 
    <link rel="stylesheet" href="Css.css"> 
	</head>
<body> 
    <header> 
        <div class="logo">  
        <img src="https://i.postimg.cc/JntvPyrs/logo-removebg-preview.png"alt="logo"> 
        </div> 
        <div class="menu">  
            <ul> 
                <li><a href="index.php">Home</a></li> 
                <li><a href="about.php">About</a></li>
				<li><a href="Myazu.php">Item details</a></li> 
                <li><a href="Login.php">Log in</a></li> 
            </ul> 
        </div> 
    </header> 
	<br><br>
   
           <div class="boxLogin">
                <img src="https://i.postimg.cc/BbrjXGz6/png-transparent-person-illustration-india-login-computer-icons-emoticon-medicine-user-login-icon-mis.png" alt="logo" width="70" height="90"> 
                <form method="post" action="Login.php"> 
                <div class="userN">
                    <input id="uName" type="text" placeholder="Username" size="15" autofocus autocomplete="on" name="Username"> 
					<?php echo $username_err; ?>
                </div> 
 
                <div class="userPass">                    
                    <input id="pass" type="password" required placeholder="password" size="15" name="password" >
					<?php echo $password_err; ?>
                </div> 
                <a href="Admin.php" class="submit-1">  
                    <input class="submit" type="submit" value="Login"> 
                </a>  
                
        </div> 
    </form> 
 
	
	<br><br>
    
    <footer>

	<p><h5>Yum</h5></p>
    <p>  contact us</p>
	<p>☏+966536864436</p>
    <p><a href="mailto:Yum@gmail.com">✉ Yum@gmail.com</a></p>
	<p>&copy Reema Aldawsari,Renad Alzahrani,Shahad bin judia,Ghaliah Alsubaie</p>
    
    </footer>
       

</body> 
</html>