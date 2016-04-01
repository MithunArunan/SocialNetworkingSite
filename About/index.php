<!DOCTYPE html>
<html lang="en">
<head>
    <title>CraftyByte | About </title>
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
	<br>
	<?php if(!isset($_SESSION['id']))
	        header("Location: /Login");
	  ?>
	  <div class="content">
		<h2> Mithun Arunan J </h2>
		Cricket enthusiast , Blogger, Android Developer and Web Developer!!
		<p></p>
	</div>
	<hr>
	
	  
	</body>

</html>
