<!DOCTYPE html>
<html lang="en">
<head>
    <title> CraftyByte | Classroom </title>
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
	<?php if($_SESSION['Role'] == 2)
	      echo "<h3>View the Student Submission Details!! </h3>
		  		<a href='/submission'> View Submissions </a>
		        "; ?>
	<br>
    <h3> Enter a task to be posted! </h3>
	<center>
	<table>
	  <form name="postForm" action="statusUpdate.php" method="post">
	    <tr><td>Title<td> <input type="text" name="titleText" required/></td> </tr>
     	<tr><td>Status<td><textarea name="statusTxt" rows="10" required></textarea></td></tr>
	    <tr><td>Deadline for Submission<td> <input name="deadline" type="date" required/></td> </tr>
     	<tr><td rowspan="2"><input type="submit" name="submit"  /></td></tr>
	  </form> 
    </table>
	</center>
	<div class="task"></div>
	<script type="text/javascript" src="/js/statusUpdate.js" ></script>
</body>

</html>
