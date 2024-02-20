
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
		       	<div class="menu_list">
                
                <?php
include_once("user_config.php");// Database Connection
$sql = "select * from tbl_gallery"; // Query the photos
$rs = mysql_query( $sql );
?>

	<script type="text/javascript" src="re/js/jquery.js">
	</script>
	<script type="text/javascript" src="re/js/jquery.lightbox-0.5.js">
	</script>
	<link rel="stylesheet" type="text/css" href="re/css/jquery.lightbox-0.5.css" media="screen" />

	<script type="text/javascript">
		// script to activate lightbox
		$(function() {
			$('#gallery a').lightBox();
		});
	</script>

<div class="section group">
<?php
while ( $row = mysql_fetch_array( $rs ) ){ // Loop through the records
	$file_name = $row['photo'];
	

	// We will append the $file_name variable to href and src attributes
	// to identify what image is being selected/shown
	// The rel='lightbox[philippines]' <a> attribute is 
	// needed to use lightbox for set of images
	// It should be stored under one name, we gave the name 'philippines'
	// we also included the title and decription on the title attribute
	// so it will be shown on the overlay
	/*
	echo "<a href='upload/$file_name' rel='lightbox[philippines]' >"; 
		echo "<img src='admin/upload/$file_name' width='400' height='265' vspace='3'>";
	echo "</a> ";
	*/
	echo "<div class='col_1_of_4 span_1_of_4'>
					  <h3></h3>
					   <img src='admin/upload/$file_name' alt='' />
					 
				</div>";
}
?>
</div>

		     <!--    <div class="section group">
				   <div class="col_1_of_4 span_1_of_4">
					  <h3></h3>
					   <img src="images/gallery/image1.jpg" alt="" />
					 
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3></h3>
					<img src="images/gallery/image2.jpg" alt="" />
					
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3></h3>
					<img src="images/gallery/image3.jpg" alt="" />
					
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3></h3>
					<img src="images/gallery/image1.jpg" alt="" />
					
				</div>
              </div>
              
              
              
                 <div class="section group">
				   <div class="col_1_of_4 span_1_of_4">
					  <h3></h3>
					   <img src="images/gallery/image2.jpg" alt="" />
					 
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3></h3>
					<img src="images/gallery/image3.jpg" alt="" />
					
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3></h3>
					<img src="images/gallery/image1.jpg" alt="" />
					
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3></h3>
					<img src="images/gallery/image2.jpg" alt="" />
					
				</div>
              </div>
              
-->              
              
              
               <!--  <div class="section group">
				   <div class="col_1_of_4 span_1_of_4">
					  <h3></h3>
					   <img src="images/gallery/image3.jpg" alt="" />
					 
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3></h3>
					<img src="images/gallery/image1.jpg" alt="" />
					
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3></h3>
					<img src="images/gallery/image2.jpg" alt="" />
					
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3></h3>
					<img src="images/gallery/image3.jpg" alt="" />
					
				</div>
              </div> -->
              
              
              
			</div>    	    
	      </div> 
	    </div>          
		 <!---End-main---->
	  <!---Footer---->	
		 <div class="copy-right">
			<div class="wrap">
            <p class="design">	<a href="index.html">Home |</a>
            <a href="about.html">About |</a>
            <a href="gallery.html">Gallery |</a>
            <a href="gallery.html">Enquiry |</a>
            <a href="gallery.html">Feedback |</a>
            <a href="services.html">Services |</a>
			<a href="contact.php">Contact </a>
			<div class="clear"></div></p>
		
			  <p class="design">Design by <a href="www.webpixx.com">Webpixx Solutions</a></p>
			 <div class="clear"></div>
		</div>	
   </div> 
  </body>
</html>