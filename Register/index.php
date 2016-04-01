<!DOCTYPE html>
<html lang="en">

<head>
    <title> CraftyByte | Register </title>
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
		require('connect.php');
	 	if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			// Details sent from the Form!!
			$myName=$_POST['uName']; 
			$myPassword=$_POST['uPassword'];
			$myEmail=$_POST['uEmail'];
			$myYear=$_POST['uYear'];
			$myDept=$_POST['uDept'];
			//echo "Details Entered are ".$myName." ".$myEmail." ".$myPassword." ".$myDept." ".$myYear;
			// Execute insert query
			$val =1;
			$insertQuery = "INSERT INTO userDB (Name,Password,Email,Year,Dept,Role) VALUES 			 ('$myName','$myPassword','$myEmail',$myYear,'$myDept',$val)";
			$result = mysqli_query($conn,$insertQuery);
			
		}
?>
     
     <section class="container">
     <div class="login">
      <h1>  Register with us | CraftyByte</h1>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <p><input name="uName" type="text" required placeholder="Your Name" autocomplete="on"></p>
        <p><input name="uEmail" type="email" required placeholder="Email Id" autocomplete="on" value=""></p>
        <p><input name="uPassword" type="password" required placeholder="Password"  value=""></p>
        <p><input name="uPassword2" type="password" required placeholder="Confirm Password"value=""></p>
        <p><select name="uYear" required title="year">
        	
        	<option value="1"> 1st Year </option>
        	<option value="2"> 2nd Year </option>
        	<option value="3"> 3rd year </option>
        	<option value="4"> 4th Year </option>
            </select>
        </p>
        <p><select name="uDept" required>
        	<option value="cse"> CSE </option>
        	<option value="ece"> ECE </option>
        	<option value="eee"> EEE </option>
        	<option value="biotech"> BIO-Tech </option>
            <option value="civil"> Civil </option>
            <option value="mech"> Mechanical </option>
            <option value="biotech"> IT </option>
            </select>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Register"<p>
      </form>
    </div>
    <div class="login-help">
      <p>Forgot your password? <a href="#">Click here to reset it</a>.</p>
    </div>
  </section>
</body>
</html>