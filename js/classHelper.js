var divElement = "<hr class='hr'><div class='commonnews' id='status'></div>";
var headerElement ="<h1> <a href='#' id='stTitle'>%data%</a> </h1><br><br>";
var pElement = "<p class='largepreview'>%data% </p><br><br>";
var deadline = "<p class='largepreview'> Deadline For submission:  %data%</p><br><br>";
var postedBy = "<p> Posted by <a href='#'> %data1% </a> on <span class='date'>%data2%</span></p>";
var pSub = "<form method='POST' action='submitLink.php'> <p class='largepreview' id='sub'>Submission Link  : <input type='text' placeholder='Link' required name='subLink' /><input type='hidden' value='%SIDDATA%' required name='sid' /> <input type='submit' value='Submit' />  </p></form><br><br>";
var SID = "Status ID :<p class='statusID'>%data%</p><br><br>";