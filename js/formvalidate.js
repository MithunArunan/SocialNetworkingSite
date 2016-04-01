

//Only allow alphabets and spaces.
function nameValidator()
{
	var uname = document.contributeform.nameBox;
	var name = uname.value;
	var nameCheck = /^[A-Za-z\s]+$/;
	if(name.match(nameCheck))
	{
		return true;
	}
	else
	{
	//	dyn.textContent = "Wrong"
		alert("Name must be only alphabets");
		return false;
	}
	return true;
}


//Can be alpha numeric and must have @ . in the sequence without space
function mailCheck()
{
	var email =  document.contributeform.mailBox.value;
	var emailCheck = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/;
	if(email.match(emailCheck))
	{
		return true;
	}
	else
	{
		alert("Enter a valid email id");
		return false;
	}
}

function allNumCheck()
{
	var number = document.contributeform.phoneNo.value;
	var numberCheck = /^[\d]{6,}$/;
	if(number.match(numberCheck))
	{
		return true;
	}
	else
	{
		alert("enter a valid number");
		return false;
	}
}

function positionCheck()
{
	if(document.contributeform.positionBox.value == "default")
	{
	 alert("Select anyone");
	 return false;
	}
	else
	return true;
}

function tweetCheck()
{
	var twit = /^[@][\w]{3,}$/;
	var handle = document.contributeform.twitterUname.value;
	if(handle.match(twit))
	{}
	else
	{
		alert("'Use @ followed by alphnumerals and _'");
	}
}


function genderCheck()
{
	var sel = document.contributeform.genderButton.value;
	if(sel == "male" | sel =="female")
		return true;
	else
		alert("Select a gender");
		
		return true;
}

function interestCheck()
{
	var c=0;
	for(var i=0;i< contributeform.interestBox.length;i++)
	{
		if(document.contributeform.interestBox[i].checked)
		 c++;
	}
	if(c == 0)
		alert("Select atleast one interest");
}

function validator()
{
	genderCheck();
	interestCheck();
}