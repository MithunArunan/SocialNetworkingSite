<!DOCTYPE html>
<html lang="en">
<head>
    <title>CraftyByte | Messages</title>
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
	<?php require($ROOT_DIR.'/Login/connect.php'); ?>
	<?php 
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
			$getUserInfo = "SELECT name FROM userDB WHERE id=".$_POST['id'];
			$_SESSION['to'] = $_POST['id']; 
		    $userInfoResult  = mysqli_query($conn,$getUserInfo) or die ('Error in retrieving the user info');
		     if($rowUserInfo = mysqli_fetch_array($userInfoResult))
		  	    {
					$nameOfSender = $rowUserInfo['name'];
					$_SESSION['toName'] = $nameOfSender;
				}
			}
	?>
	<!-- Create table for message fom loggined user to the person to chat with 
		$_SESSION['id'] & $_POST['id']
	-->
	<?php 
		if($_SESSION['id'] <= $_SESSION['to'])
		 {
		   $val = $_SESSION['id'];
		   $val2 = $_SESSION['to'];
		 }
		else
		{
			$val = $_SESSION['to'];
			$val2 = $_SESSION['id'];
		}
		$tableName = "chatBox".$val.$val2;
		$createChatBox = "CREATE TABLE IF NOT EXISTS ".$tableName." ( messageID INT(100) PRIMARY KEY AUTO_INCREMENT ,senderID INT(100) NOT NULL, receiverID  INT(100) NOT NULL,message VARCHAR(140) NOT NULL ,messageTime TIMESTAMP NOT NULL, msgStatus INT(10) NOT NULL) ";
		$createResult = mysqli_query($conn,$createChatBox) or die ('Error in creating the table');
	?>
	<h2> Messages  <?php echo "from ".$_SESSION['toName']; ?> </h2>
	 <!-- Messages So far -->
	 <?php
	 	$queryMsg = "SELECT * FROM ".$tableName ." ORDER BY messageID DESC LIMIT 5" ;
		$resultMsg = mysqli_query($conn,$queryMsg);
		$rowMsg = mysqli_fetch_array($resultMsg);
		$lastID = $rowMsg['messageID'];
		
		$queryMsg = "SELECT * FROM ".$tableName ." WHERE messageID > ". ($lastID - 5) ;
		$resultMsg = mysqli_query($conn,$queryMsg);		
		while($rowMsg = mysqli_fetch_array($resultMsg))
		{ // Message Details
			$msg = $rowMsg['message'];
			if($rowMsg['senderID'] == $_SESSION['id'])
				$name = $_SESSION['name'];
			else
				$name = $_SESSION['toName']; 
			echo "<h3 bgcolor='blue'>".$name."</h3>";
			echo "<p>".$msg." </p><hr>";
		}
	 ?>
	 <form action="sendMsg.php" method="post">
	 <input type="multiline" name="sendBox" placeholder="Write to send a message..." maxlength="50"  height="300" width="200"/>
	 <input type="submit" value="Send"/>
	 </form></br>
	 
</body>
</html>
