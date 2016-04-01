<?php
include('db.php');

if($_GET['user'])
{
$user=$_GET['user'];
?>
<html>
<head>
	<title>9lessons Tutorials</title>
	
	<script src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js" type="text/javascript">
	</script>
	


	<script type="text/javascript">




	var user='<?php echo $user;?>';
	var auto_refresh = setInterval(function ()
    {
	var b=$("ol#update li:last").attr("id");
		
		$.getJSON("chat_json.php?q="+user,function(data)
		{
				$.each(data.posts, function(i,data)
				{
				
				   if(b != data.id)

                   {	
	

					var div_data="<li  id='"+data.id+"'><b>"+data.user+"</b>: "+data.msg+"</li>";
						
						
					$(div_data).appendTo("ol#update");


					}
				});
			
		});
		
	}, 2000);	
		
		
		$(document).ready(function()
  {
   
  $('.post').click(function()
  {
  var boxval = $("#content").val();
	var user = '<?php echo $user;?>';

	
    
	
	var dataString = 'user='+ user + '&msg=' + boxval;

  
  	if(boxval.length > 0)
	{
	
	if(boxval.length<200)
	{
	$("#flash").show();
	$("#flash").fadeIn(400).html('<img src="http://labs.9lessons.info/ajax-loader.gif" align="absmiddle">&nbsp;<span class="loading">Loading Update...</span>');
$.ajax({
		type: "POST",
  url: "chatajax.php",
   data: dataString,
  cache: false,
  success: function(html){
 
  $("ol#update").append(html);
  
  
  

   $('#content').val('');
   $('#content').focus();
  $("#flash").hide();
		

  }
  
 });
}
else
	{
	alert("Please delete some Text max 200 charts");
	
	}
	}
  return false;
  });
  
  });
  </script>
  
 

<style>
body{ font-family:"lucida grande",tahoma,verdana,arial,sans-serif;font-size:11px;color:#333; font-size:14px}
*
{
margin:0px;
padding:0px;

}
ol#update
{
list-style:none;

}




</style>



</head>
<body >

<div style="width:550px; float:left; margin:30px">





<ol id="update" >


</ol>

<div id="flash"></div>

<div>
<form  method="post" name="form" action="">
<div align="left">

<table>
<tr><td>
<input type='text' class="textbox" name="content" id="content" maxlength="145" />
</td><td valign="top">
<input type="submit"  value="Post"  id="post" class="post" name="post"/>

</td></tr>
</table>


</div>
</form>

</div>

</div>


</body>
</html>
<?php
}
else
{
 echo "URL should be chat.php?user=yourname";
}
?>
