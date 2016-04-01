<?php
include('db.php');
if($_POST)
{
$user=$_POST['user'];
$msg=$_POST['msg'];
mysql_query("insert into chat(user,msg)values('$user','$msg')");
}
else { }
?>

<li class="box">
<b><?php echo $user; ?>:</b><?php echo $msg;?>
</li>