<?php
session_start(); 
	      $ROOT_DIR = $_SERVER['DOCUMENT_ROOT'];
		  require($ROOT_DIR.'/Login/connect.php');
		  $query = "SELECT * FROM classroom,userdb,submission WHERE userdb.id = classroom.id AND submission.uid = ". $_SESSION['id'] ." AND submission.sid = classroom.sid  ";
		  $result = mysqli_query($conn,$query) or die ("Error in Queriyinf");
		  $someArray = [];
          // Loop through query and push results into $someArray;
          while ($row = mysqli_fetch_assoc($result)) {
                 array_push($someArray, [
                    'Title'   => $row['Title'],
                    'StaTxt' => $row['StaTxt'],
                    'deadline' => $row['deadline'],
                    'date' => $row['date'],
                    'Name' => $row['Name'],
					'linke' => $row['link'],
					'sid' => $row['SID']
           ]);
           }

  // Convert the Array to a JSON String and echo it
           $someJSON = json_encode($someArray);
           echo $someJSON;
?>  