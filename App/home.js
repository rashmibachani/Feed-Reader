function loadall()
{
	//load all the files contents and display all feeds
	//this will be done later!
}

function disp(feedid)
{
	xmlhttp=createobject();
		
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("readingarea").innerHTML=xmlhttp.responseText; //description content goes here 
		}
	}
	xmlhttp.open("GET", "fetch.php?id="+feedid, true);
	xmlhttp.send();
}

function createobject() //creates an XMLHttpRequest Object
{
	if(window.XMLHttpRequest)
		xmlhttp=new XMLHttpRequest;
	else
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	return xmlhttp;
}

function pag(num)
{
	xmlhttp=createobject();
	//we want to display only first few items!
}
