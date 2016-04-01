<?php session_start();
	  require($_SERVER['DOCUMENT_ROOT']."/Login/connect.php");

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
	 	$queryInsert = "INSERT INTO ".$tableName." (senderID,receiverID,message,msgStatus) 
						VALUES (".$_SESSION['id'].",".$_SESSION['to'].",'".$_POST['sendBox']."',0)" ;
		echo $queryInsert;
		$resultMsg = mysqli_query($conn,$queryInsert) or die ('Error in querying the data');
		header("Location: index.php");
?>