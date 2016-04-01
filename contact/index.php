<!DOCTYPE html>
<html lang="en">
<head>
    <title>CraftyByte | Contact Us</title>
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
			 <h3> Contibute </h3>
			 <p> You have the opportunity to become one of us. </p>
			 <p> Grab your chance by filling up this form </p>
			 <form name ="contributeform">
			 <table class="contributeF">
				<tr>
					<td id="align-right">Name * </td>
					<td> <input type="text" name="nameBox" onBlur="nameValidator()">
					</td>
					<td>
					<label id="dyn"> </label>
					</td>
				</tr>
				</br>
				<tr>
				<td id="align-right">Mail Id *</td>
				<td><input type="text" name="mailBox" onBlur="mailCheck()"></td>
				</tr>
				<tr>
				<td id="align-right">Phone No</td>
				<td> <input type="text" name="phoneNo" onBlur="allNumCheck()" ></td>
				</tr>
                <tr>
				<td id="align-right">Gender</td>
				<td><input type="radio" name="genderButton" value="male">Male
				<input type="radio" name="genderButton" value="female" >Female</td>
				</tr>
				<tr>
				<td id="align-right">Position *</td>
				<td>
				<select name="positionBox" onBlur="positionCheck()">
					<option value="default" selected> Select anyone one </option>
					<option value="AD"> App Developer </option>
					<option value="B"> Blogger </option>
					<option value="DA"> Data Analyst </option>
					<option value="IC"> Info Contributor </option>
					<option value="M"> Marketer </option>
					<option value="WD">  Web Developer </option>
				</select>
				</td>
				</tr>
				<tr>
				<td id="align-right">Interests</td>
				<td>
				<input type="checkbox" name="interestBox" value="technology">Technology
				<input type="checkbox" name="interestBox" value="sports">Sports
				<input type="checkbox" name="interestBox" value="politics">Politics
				<input type="checkbox" name="interestBox" value="Science">Science
				</td>
				</tr>
				<tr>
				<tr>
				<td>Twitter Handle</td>
				<td> <input type="text" name="twitterUname" value="@" onBlur="tweetCheck()"/> </td>
				</tr>
				<td id="align-right">
				Why do you wish to be part of CraftyByte?</td>
				<td>
				<TextArea ></TextArea>
				</td>
				</tr>
				<tr>
				<td colspan="2">
				<input type="button" value="Submit" onClick="validator()" >
				</td>
				</tr>
			 </table>
			 </form>
		<hr>
	<hr>
	
	  
	</body>

</html>
