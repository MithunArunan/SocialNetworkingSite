<?php
session_start(); 
echo"<script type='text/javascript'>alert('You are Succesfuly Logged Out')</script>";
if(session_destroy())
{
header("Location: /");
}
?>