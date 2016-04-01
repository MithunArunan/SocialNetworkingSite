<?php
session_start(); 
$subLink = $_POST['subLink'];
$sid = $_POST['sid'];
$ROOT_DIR = $_SERVER["DOCUMENT_ROOT"];
require($ROOT_DIR.'/Login/connect.php');
echo "<h4>Processing the Data.......................................</h4>";
// Write into database SocialDB
$query = "UPDATE submission SET link='".$subLink."' WHERE SID=$sid AND UID =".$_SESSION['id'];
echo $query;
$result = mysqli_query($conn,$query) or die ("Error Updating the content");
//echo $subLink."AND ".$_SESSION['id'].;
header("Location: /classroom");
?>