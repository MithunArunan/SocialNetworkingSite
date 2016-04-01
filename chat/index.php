<!DOCTYPE html>
<html lang="en">
<head>
    <title>CraftyByte | Byte Chat</title>
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
		<script type="text/javascript" src="/js/classHelper.js"> </script>
		<script type="text/javascript" src="/js/jquery-1.11.2.js"> </script>
		<link href="/css/loginStyle.css" rel="stylesheet" type="text/css" >
		<link href="/css/classroom.css" rel="stylesheet" type="text/css" >
		<script type="text/javascript" src="/js/statusUpdate2.js" >
     	 </script>
</head>
<body>	
	<?php
	 //Root directory
	 $ROOT_DIR = $_SERVER["DOCUMENT_ROOT"];
	 include($ROOT_DIR.'/navbar.php'); ?>
	 <?php if(!isset($_SESSION['id']))
	        header("Location: /Login");
	  ?>
	<br>
	<br>
    <h3> Select a person to chat with ! :) </h3>
	<!-- Create entries with name of the user and a chat button to chat with the specified user. -->
	
		<!-- Retrieve for every entry of the User from userDB -->
		<?php
		require($ROOT_DIR.'/Login/connect.php');
		$userNames = "SELECT name,id FROM userdb where ID != ".$_SESSION['id'];
		$result = mysqli_query($conn,$userNames) or die ("Error in Querying names from table");
		echo "<table>";
		while($row = mysqli_fetch_array($result))
		{
			 echo    " <tr> ";
				echo "<td>User : ". $row['name']. "</td>";
				echo "<td><form action='messages/index.php' method='post'><input type='hidden' name='id' value= '".$row['id']."'><input type='submit' value='Chat'>
						</form></td>";
				echo "";
			    echo "</tr>";
		}
		echo "</table>";
		?>
	<!-- <script type="text/javascript" src="/js/statusUpdate.js" ></script> -->
</body>

</html>
