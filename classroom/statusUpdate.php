<?php
session_start(); 
$ROOT_DIR = $_SERVER["DOCUMENT_ROOT"];
require($ROOT_DIR.'/Login/connect.php');
echo "<h4>Processing the Data.......................................</h4>";
// Write into database SocialDB
$title = $_POST['titleText'].trim();
$status = $_POST['statusTxt'].trim();
$time = $_POST['deadline'];
$id = $_SESSION['id'];

 $title.$status.$time.$id;
$dd = date('Y-m-d');
$insertQuery = "INSERT INTO classroom(ID,Title,StaTxt,deadline,date) VALUES($id,'$title','$status','$time','$dd')";
$result =  mysqli_query($conn,$insertQuery) or die("Error in Quering the database");

$query = "SELECT SID FROM classroom WHERE Title = '$title' AND ID = $id AND StaTxt = '$status'";
$result = mysqli_query($conn,$query) or die("Error in Quering the database1");
$row =  mysqli_fetch_array($result);
$value = $row['SID'];

$userQuery = "SELECT ID FROM userdb";
$result = mysqli_query($conn,$userQuery) or die("Error in Quering the database2");
while($row = mysqli_fetch_array($result) )
{
  $u = $row['ID'];
  echo $u;
  $updatingQuery = "INSERT INTO submission(UID,SID) VALUES($u,$value)";
  $r =mysqli_query($conn,$updatingQuery) or die("Error in Quering the database3");
}

header("Location: /classroom");
?>