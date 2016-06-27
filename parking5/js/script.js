function confirmation(uid) {
	var answer = confirm("Select OK to delete.")
	if (answer){
		window.location = "users/process.php?action=delete&uid=" + uid;
	}
}
function appconfirmation(cid) {
	var answer = confirm("Select OK to delete.")
	if (answer){
		window.location = "applications/process.php?action=delete&cid=" + cid;
	}
}
function clearconfirm(cid) {
	var answer = confirm("Select OK to Clear violation.")
	if (answer){
		window.location = "violation/process.php?action=clearvio&violist_id=" + cid;
	}
}

// JavaScript Document

//MT UPDATE 3 starts HERE
/* FOR AJAX USE */



function handleHttpResponse()
{
	if (http.readyState == 4)
	{
		results = http.responseText;
		/* Retrieve value to search which is a category */
		
		var name = document.getElementById("category").value;
		document.getElementById('subcat').innerHTML = results;
	}
}

function getHTTPObject()
{
	var xmlhttp;
	
	// if (!xmlhttp && typeof XMLHttpRequest != 'undefined'){
		try
		{
			// Opera 8.0 + Firefox, Safari
			
			xmlhttp = new XMLHttpRequest();
			
		}
		
		catch (e)
		{
			// Internet Explorer Browsers
			
			try
			{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
			}
			
			catch (e)
			{
				try
				{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e)
				{
					// Something went wrong
					xmlhttp = false;
				}
			}
		}
		
		return xmlhttp;
			
}

var http = getHTTPObject();

// AJAX for Category ENDS HERE

// Search starts here

var xmlHttp;

function suggest(input)
{
	xmlHttp = GetXmlHttpObject();
	
	if (xmlHttp==null)
	{
		alert ("Browswer does not support HTTP Request");
		return;
	}
	
	var url="music/result.php";
		url=url+"?query="+input;
		
		//xmlHttp.onreadystatechange=function(){stateChanged(input);};
		
		xmlHttp.onreadystatechange=stateChanged;
		xmlHttp.open("GET",url,true);
		xmlHttp.send(null);
}

// function stateChanged(input)

function stateChanged()
{
	if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	{
		var load = par('load');
		if(load == "list")
		{
			document.getElementById("suggestions").innerHTML=xmlHttp.responseText;
		}
		
		else
		{
			window.location = "index.php?page=music&load=list";
			document.getElementById("suggestions").innerHTML=xmlHttp.responseText;
		}
	}
}

function GetXmlHttpObject()
{
	var xmlHttp=null;
	try
	{
		xmlHttp=new XMLHttpRequest();
	}
	
	catch (e)
	{
		try
		{
			xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e)
		{
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	
	return xmlHttp;
}

function par(name)
{
	name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
	var regexS = "[\\?&]"+name+"=([^&#]*)";
	var regex = new RegExp( regexS );
	var results = regex.exec( window.location.href );
	
	if(results==null)
	
		return "";
	else
		return results[1];
	
}

function preLoad(pid){
	var loadpage = par('load');
	var loadmodule = par('page');
	
	if(loadpage == "modify" && loadmodule == "products"){
		getSubCategory(pid);
	}
}

function checkFieldContain(field, helperMsg)
{
	var letterExpression = /^[a-zA-Z]+$/;
	if(field.value.match(letterExpression))
	{
		return true;
	}
	else
	{
		alert(helperMsg);
		field.focus();
		return false;
	}
}

function checkLength(field, helperMsg)
{
	var Input = field.value;
	if(Input.length >= 6)
	{
		return true;
	}
	else
	{
		alert(helperMsg);
		field.focus();
		return false;
	}
}

function isNumeric(elem, helperMsg)
{
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression))
	{
		return true;
	}
	else
	{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function checkNumber(id)
{
	
	while (document.getElementById(id).value.length > 0 && isNaN(document.getElementById(id).value)) {
			document.getElementById(id).value = document.getElementById(id).value.substring(0, document.getElementById(id).value.length - 1)
	}
	document.getElementById(id).value = trim(document.getElementById(id).value);
		
}

sfHover = function() {
	var sfEls = document.getElementById("nav").getElementsByTagName("LI");
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}
}

var xmlHttp;

function scan(input) {
        xmlHttp=GetXmlHttpObject();
    if (xmlHttp==null) {
        alert ("Browser does not support HTTP Request");
        return;
    }
var loadpage = par('page');
var cid = par('cid');
	if(loadpage == 'scan'){
		var url="scan/results.php?";
	}
    url=url+"query="+input;
    xmlHttp.open("GET",url,true);
    xmlHttp.send(null);
}
		