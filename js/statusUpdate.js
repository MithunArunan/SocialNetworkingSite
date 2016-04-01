getStatus();
function getStatus()
 {
	// alert('Inside the getStatus Block!');
	// $('div.task').html("<p></p>");
	// jQuery
	 $.getJSON('/classroom/getDetail.php', function(data) {
		//alert("Valuee of ti is" + data.length);
		$.each(data, function(i,data)
	   {
        $('div.task').prepend(divElement);
		var s = SID.replace("%data%",data.sid);
		$('.commonnews:first').append(s);
		var headerEle = headerElement.replace("%data%",data.Title);
        $('.commonnews:first').append(headerEle);
		var pEle = pElement.replace("%data%",data.StaTxt);
		$('.commonnews:first').append(pEle);
		var deadlineEle = deadline.replace("%data%",data.deadline);
		$('.commonnews:first').append(deadlineEle);
		
		var p = pSub.replace("%SIDDATA%",data.sid)
		if(data.linke === "NULL")
		$('.commonnews:first').append(p);
		else
		{
		 $('.commonnews:first').append(p);
		}
		var postDetail = postedBy.replace("%data1%",data.Name).replace("%data2%",data.date);
		$('.commonnews:first').append(postDetail);
	  }); 
    });	
 }
