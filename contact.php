
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
  <title>Mangal Murti Caterers</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
  
  

       <script language="Javascript">
function isBlank(s)
{
	var len;
	len=s.length;
	for(i=0;i<len;i++)
	{
		if(s.charAt(i)!="")
		{
			return false;
		}
	}
	return true;
}

function isString(s)
{
	var len;
	len=s.length; 
	for(i=0;i<len;i++)
	{
		if(s.charAt(i)>=0 && s.charAt(i)<=9)
		{
			return false;
		}
	}
	return true;
}

function ValidateName()
{
	var str=document.feedback.txtname.value;
	if(isBlank(str))
	{
		alert("Name cant not be blank");
		document.feedback.txtname.value="";
		return false;
	}
	if(isString(str)==false)
	{
		alert("Please Enter only Alphabets!");
		document.feedback.txtname.value="";
		return false;
	}
	return true;
}

function ValidatePhone()
{
        var x = document.feedback.txtcontact.value;
       
        if (x==null || x=="")
 	 {
 		 alert("Phone no. cannot be left blank");
 		 return false;
 	 }       

       	 if(isNaN(x)|| x.indexOf(" ")!=-1)
	{
              			alert("Enter only numeric value");
			return false;
                }
       			 if (x.length > 10 || x.length < 10)
			{
                			alert("Enter 10 digits only"); 
				return false;
          			 }
       
}
function ValidateComment()
{
	var str=document.feedback.txtcomment.value;
	var len=str.length;
	if(isBlank(str))
	{
		alert("Comment cant not be blank!");
		document.feedback.txtcomment.value="";
		return false;
	}
		
	return true;
}


function ValidateEmail()
{
	var str=document.feedback.txtemail.value;
	var at="@";
	var dot=".";
	var dotdot="..";
	idxat=str.indexOf(at);
	idxdot=str.indexOf(dot);
	var lenstr=str.length;
	if(isBlank(str))
	{
		alert("Email ID can not be blank!");
		document.feedback.txtemail.value="";
		return false;
	}
	if(str.indexOf(at)==-1)
	{
		alert("Enter valid Email id, @ should be present");
		document.feedback.txtemail.value="";
		return false;
	}
	if(str.indexOf(at)==0)
	{
		alert("Enter valid Email id, @ should not be present at the start");
		document.feedback.txtemail.value="";
		return false;
	}
	if(str.indexOf(at)==lenstr-1)
	{
		alert("Enter valid Email id, @ should not be present at the end");
		document.feedback.txtemail.value="";
		return false;
	}
	if(str.indexOf(at,idxat+1)!=-1)
	{
		alert("Enter valid Email id, @ should not be present more than once");
		document.feedback.txtemail.value="";
		return false;
	}
	if(str.substring(idxat, idxat-1)==dot)
	{
		alert("Enter valid Email id, dot should not preceed after @");
		document.feedback.txtemail.value="";
		return false;
	}
	if(str.substring(idxat+1, idxat+2)==dot)
	{
		alert("Enter valid Email id, dot should not appear after @");
		document.feedback.txtemail.value="";
		return false;
	}
	if(str.indexOf(dot)==-1)
	{
		alert("Enter valid Email id, dot should be present");
		document.feedback.txtemail.value="";
		return false;
	}
	if(str.indexOf(dot)==0)
	{
		alert("Enter valid Email id, dot should not be present at the start");
		document.feedback.txtemail.value="";
		return false;
	}
	if(str.indexOf(dot)==lenstr-1)
	{
		alert("Enter valid Email id, dot should not be present at the end");
		document.feedback.txtemail.value="";
		return false;
	}
	if(str.substring(idxdot, idxdot+2)==dotdot)
	{
		alert("Enter valid Email id, dot should not consecutive");
		document.feedback.txtemail.value="";
		return false;
	}
	return true;
}
function ProcessForm()
{
	if(document.feedback.txtname.value=="")
	{
		alert("Please Enter Name");
		document.feedback.txtname.focus();
		return false;
	}
	
	if(document.feedback.txtemail.value=="")
	{
		alert("Please Enter Email ID");
		document.feedback.txtemail.focus();
		return false;
	}
                if(document.feedback.txtcontact.value=="")
	{
		alert("Please Enter Contact");
		document.feedback.txtcontact.focus();
		return false;
	}

               if(document.feedback.txtcomment.value=="")
	{
		alert("Please Enter Comments");
		document.feedback.txtcomment.focus();
		return false;
	}
}


</script>
 </head>
	 <body>		
	 	 <div class="header">
	 	 	 <div class="header_img">
	 	 	 	<img src="images/header_img2.jpg" alt="" />
	 	 	 </div>
          <div class="header_bottom">
          	 <div class="wrap">
          	  <div class="logo">
          	  	   <a href="index.html"><img src="images/logo3.png" alt="" /></a>
          	    </div>
          	       <div class="menu">
					    <ul>
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="gallery.html">Gallery</a></li>
                            <li><a href="registration.html">Order</a></li>
							<li><a href="contact.php">Contact</a></li>
							<div class="clear"></div>
						</ul>
					  </div>
				    <div class="clear"></div>
				</div>
		    </div>
       </div>
		 <!---start-content---->
		   <div class="main">
		         <div class="wrap">
		         	<div class="contact_desc">
			         <div class="contact-form">
				  	   <h2>Contact Us</h2>
					     <form method="post" name="contact" action="contact-post.html" class="left_form">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="txtname" type="text" class="textbox" onBlur="return ValidateName()"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="txtemail" type="text" class="textbox" onBlur="return ValidateEmail()"></span>
						    </div>
						    <div>
						     	<span><label>CONTACT</label></span>
						    	<span><input name="txtcontact" type="text" class="textbox" onblur="return ValidatePhone()"></span>
						    </div>
					    </form>
					    <form class="right_form">
					        <div>					    	
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="txtcomment" onBlur="return ValidateComment()"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" name="btnsubmit" value="Submit" class="myButton" onClick="return ProcessForm()"></span>
						  </div>
					    </form>
					    <div class="clear"></div>
				  </div>
				 <div class="content_bottom">
				 	<div class="company_address">
				     	<h2>Location</h2>
						    	<p>4/11,</p>
                                <p>LTMG Hospital Quatrs,</p>
						   		<p>Sion Koliwada,</p>
						   		<p>Mumbai- 400037</p>
				   		<p>Mobile:9892188573</p>
				   		<p>Phone: 022-24308693</p>
				 	 	<p>Email: <span><a href="#">info@mangalmurticaterers.com</span></a></p>
				   		<p>Follow on: <span><a href="#">Facebook</a></span>, <span><a href="#">Twitter</a></span></p>
				     </div>
				       <div class="contact_info">
    	 				<h2>Find Us Here</h2>
					    	  <div class="map">
							   	   <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:250px;width:850px;'><div id='gmap_canvas' style='height:250px;width:850px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://addmap.net/'>embedding google maps</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=f3300091de08448438436712e2844c526fa7bef1'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(19.065558394358924,72.86802948144532),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(19.065558394358924,72.86802948144532)});infowindow = new google.maps.InfoWindow({content:'<strong>Mangal Murti Caterers</strong><br>4/11, LTMG Hospital Quarters, Sion Koliwada, Mumbai- 400037<br>400037 Mumbai<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
							  </div>
      				     </div>
				      <div class="clear"></div>
	                </div>	
	             </div>  
	          </div>        	    
	      </div>          
		 <!---End-main---->
	  <!---Footer---->	
		 <div class="copy-right">
			<div class="wrap">
			  <p class="design">Design by <a href="www.webpixx.com">Webpixx Solutions</a></p>
			 <div class="clear"></div>
		</div>	
   </div> 
  </body>
</html>

<?php
if(isset($_POST['btnsubmit']))
{
	$msg= 'Name:' .$_POST['txtname'] ."\n"
		.'Email:' .$_POST['txtemail']. "\n"
		.'Contact:' .$_POST['txtcontact']. "\n"
		.'Comment:' .$_POST['txtcomment'];
	mail('info@acementors.co.in', 'Enquiry', $msg);
	$message = "Thanks for contacting us";
  	echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
	header('location:contact.php');
	exit(0);
}


?>