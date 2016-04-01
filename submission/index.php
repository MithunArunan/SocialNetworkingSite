<!DOCTYPE html>
<html lang="en">
<head>
    <title>CraftyByte | Submission Tab</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="CraftyByte - Providing valuable technical articles.
		 Android APP products. Solutions to IT companies. Guide to young students." />
		<meta name="keywords" content="CraftyByte, android, android app, technology, blogs, articles, teens, learn, tutorials, knowledge,platform" />
		<meta name="author" content="Mithun Arunan for CraftyByte" />
		<link rel="shortcut icon" href="/img/craftybytelogo.gif">
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
	<?php if($_SESSION['Role'] == 1)
	      echo "ACCESS DENIED" ?>
	<?php if($_SESSION['Role'] == 2 )
	      {
		  // Details!! Status info ! Title! Deadline!! No of Submissions !! Link to the Submissions!! 
		  $ROOT_DIR = $_SERVER['DOCUMENT_ROOT'];
		  require($ROOT_DIR.'/Login/connect.php');
	/** Submission made alone  $query = "SELECT * FROM classroom,userdb,submission WHERE submission.sid = classroom.sid AND submission.UID = userdb.ID  ";
		if($row['link'] != "NULL" )
		    echo $row['Name']." ".$row['Title']." ".$row['StaTxt'].$row['link']." "."\n"; **/
		
          $query = "SELECT * FROM classroom"; 		
		  $result = mysqli_query($conn,$query) or die ("Error in Queriyinf");
		  while($row = mysqli_fetch_array($result))
		  {
		  	//echo $row['SID']." Title  ".$row['Title'];
			echo '<hr class="hr">
	 		<div class="commonnews">
			<h1> <a href="#">'.$row['Title'].'</a> </h1>
			<br>
			<p class="largepreview">'.$row['StaTxt'].'
			</p><br><p>Deadline For submission :'.$row['deadline'].' </p>
			';
			echo "</br></br>";
			$query2 = "SELECT * FROM userdb,submission WHERE submission.sid =". $row['SID']." AND submission.UID = userdb.ID  ";
			$res = mysqli_query($conn,$query2) or die ("Error in Queriyinf");
			$count=0;
      	    while($ro = mysqli_fetch_array($res))
		    {
		     	if($ro['link'] != "NULL" )
				{
				  //echo $ro['SID']." ".$ro['Name']." ".$ro['link'];
				  echo '<p> Submission By  '.$ro['Name'].' <span class="date"> Submission Link '.$ro['link'].'</span></p><br>';
				  echo "<br>";
				  $count++;
				}
			}
			echo '<p> Total Submissions made <span class="date">'.$count.'</span></p><br><br>';
			echo '<p> Posted on <span class="date">'.$row['date'].'</span></p>';
		   }
		 }
    ?>
	
	</body>

</html>
