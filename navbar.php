<?php session_start(); ?>

<div class="navbar">
	<a href="#" > <img src="/img/craftybytelogo.gif" alt="logo" width="" height="30px"><h1 class="heading"> Craftybyte </h1> </a>
	<p> Explore every bit of the world </p>
    <?php 
		if(!isset($_SESSION['userName']))
		{
			echo "<a href='/Register' id='logReg'>Register</a>";
			echo"<a href='/Login' id='logReg'>Login </a>";
		}
		else
		{
		echo "<a href='/Logout/logout.php' id='logReg'>Logout</a>";
			echo"<p id='logReg'>Welcome ".$_SESSION['userName']."  </p>";
			
				
		}
	?>
	<div class="navbar-div">
	<ul class="navbar-div">
		<li class="navbar-li"><a href="/" id="links">Home</a></li>
		<li class="navbar-li"><a href="/classroom"id="links">Class Room</a></li>
		<li class="navbar-li"><a href="/chat"id="links">Chat</a></li>
		<li class="navbar-li"><a href="/submission"id="links">Submissions</a></li>
		<li class="navbar-li"><a href="/About/index.php"id="links">About</a></li>
		<li class="navbar-li"><a href="/contact/index.php"id="links">Contact Us</a></li>
	</ul>
	</div>
	<hr>
</div>