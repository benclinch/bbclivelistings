<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
	<link rel="stylesheet" type="text/css" media="all" href="style.css" /> 
	<script type="text/javascript" src="jquery.js"></script> 
	<title>BBC Radio Now/Next</title> 
     <script> 
		$.extend({
		  getUrlVars: function(){
		    var vars = [], hash;
		    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
		    for(var i = 0; i < hashes.length; i++)
		    {
		      hash = hashes[i].split('=');
		      vars.push(hash[0]);
		      vars[hash[0]] = hash[1];
		    }
		    return vars;
		  },
		  getUrlVar: function(name){
		    return $.getUrlVars()[name];
		  }
		});
		
		var serviceName = $.getUrlVar('service');
		
		$(function() {
			$("#nownext").load('response.php?randval='+ Math.random()+'&service='+serviceName);
		    var minutes = new Date().getMinutes(), interval = 15*1000;
		    if (minutes <= 2 || (minutes >= 28 && minutes <= 32) || minutes >= 58) {
		        interval = 5*1000;
		    }
		    setTimeout(arguments.callee, interval);
		});
		
		$(function() {
			if(serviceName == "5live"){
				$("#header").append("<h1>Now and Next on <br />5 Live</h1>");
			}else if(serviceName == "6music"){
				$("#header").append("<h1>Now and Next on <br />6Music</h1>");
			}else if(serviceName == "asiannetwork"){
				$("#header").append("<h1>Now and Next on <br />Asian Network</h1>");
			}else if(serviceName == "bbc1xtra"){
				$("#header").append("<h1>Now and Next on <br />1xtra</h1>");
			}else if(serviceName == "radio1"){
				$("#header").append("<h1>Now and Next on <br />Radio 1</h1>");
			}else if(serviceName == "radio2"){
				$("#header").append("<h1>Now and Next on <br />Radio 2</h1>");
			}else if(serviceName == "radio3"){
				$("#header").append("<h1>Now and Next on <br />Radio 3</h1>");
			}else if(serviceName == "radio4"){
				$("#header").append("<h1>Now and Next on <br />Radio 4</h1>");
			}else if(serviceName == "radio7"){
				$("#header").append("<h1>Now and Next on <br />Radio 7</h1>");
			}else if(serviceName == "worldservice"){
				$("#header").append("<h1>Now and Next on <br />World Service</h1>");
			}else {
				$("#header").append("<h1>Error!</h1>");
			}
		});
		
     </script> 
</head> 
<body> 	
	<div id="container">
	<div id="header">
		
	</div>
	<div id="nownext"></div>
	</div>
</body> 
</html>