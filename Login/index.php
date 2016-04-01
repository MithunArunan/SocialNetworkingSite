<!DOCTYPE html>
<html lang="en">

<head>
    <title> CraftyByte | Login </title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="CraftyByte - Providing valuable technical articles.
		 Android APP products. Solutions to IT companies. Guide to young students." />
		<meta name="keywords" content="CraftyByte, android, android app, technology, blogs, articles, teens, learn, tutorials, knowledge,platform" />
		<meta name="author" content="Mithun Arunan for CraftyByte" />
		<link rel="shortcut icon" href="/img/craftybytelogo.gif">
		<!-- For Large Sized Screens -->
		<link href="/css/homepage.css" rel="stylesheet" type="text/css" >
		<link rel="stylesheet" href="/css/loginStyle.css">
</head>

<body>
	<?php
	 //Root directory
	 $ROOT_DIR = $_SERVER["DOCUMENT_ROOT"];
	 include($ROOT_DIR.'/navbar.php'); 
	 ?>	
	 <?php
	 	$failCase = "";
		require('connect.php');
	 	if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			// username and password sent from Form
			$myusername=$_POST['login']; 
			$mypassword=$_POST['password']; 
			$sqlQuery="SELECT * FROM userDB WHERE email='$myusername' AND password='$mypassword'" ;
			$result=mysqli_query($conn,$sqlQuery);
			
			if($result)
			{
				$count=mysqli_num_rows($result);
				$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
				// If result matched $myusername and $mypassword, table row must be 1 row
				if($count==1)
				{
					//echo("Successful");
					$_SESSION["userName"] = $myusername;
					$_SESSION["name"] = $row["Name"];
					$_SESSION['Role'] = $row["Role"];
					$_SESSION["id"] = $row["ID"];
					$_SESSION["year"] = $row["Year"]; 
					header("Location: ../");
				}
				else
				{
					$failCase = "Invalid Credentials";
				}
			}
		}
    ?>
	<section class="container">
     <div class="login">
      <h1>Login to CraftyByte
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <p><input name="login" type="text" required placeholder="Username or Email" autocomplete="on"></p>
        <p><input name="password" type="password" required placeholder="Password" autocomplete="off" value=""></p>
        <span class="error"><?php echo $failCase; ?></span>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>

    <div class="login-help">
      <p>Forgot your password? <a href="#">Click here to reset it</a>.</p>
    </div>
  </section>
	  
</body>
</html>