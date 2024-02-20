<!DOCTYPE HTML>
<html>
<head>
  <title>Mangal Murti Caterers</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
  
  
    <link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/style1.css" rel="stylesheet"/>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="css/animate.css">
<link href="css/wow.css" rel="stylesheet"/>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

<script type='text/javascript' src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/wow.js"></script>
<script>
       new WOW().init();
</script>
<script>
wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }
                    )
                    wow.init();

</script>

 <script type="text/javascript" src="js/jssor.slider-20.min.js"></script>
 <script>
        jssor_1_slider_init = function() {
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 2500,
              $SlideEasing: $Jease$.$OutQuint,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>
    
   
      
		
	}
    
     <script>
    
   function calculate() {
		var myBox1 = document.getElementById('box1').value;	
		var myBox2 = document.getElementById('box2').value;
		var result = document.getElementById('result');	
		var myResult = myBox1 * myBox2;
		result.value = myResult;
      
		
	}
		
		</script>

 </head>
	 <body>		
	 	 <div class="header">
	 	 	 <div class="header_img">
	 	 	 	<img src="images/header_img.jpg" alt="" />
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
<div class="row span30 main-content">
	<div class="container">
		<div class="col-md-12 enquiry">
			<h2 class="red text-center">Order Form</h2>
			<form action="orderlist.php" method="post" name="application" class="form-horizontal" role="form" >
                              
                
                <div class="form-group">
                    <label class="col-md-4 control-label">Name	:</label>
                 <div class="col-md-6">
                    <input class="form-control" name="name" id="txtFname" required type="text" >
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Contact No	:</label>
                 <div class="col-md-6">
                    <input class="form-control " name="contact_number"  required type="text">
                  </div>
                </div>
              <!--<div class="form-group">
                    <label class="col-md-4 control-label">Food Type	:</label>
                 <div class="col-md-6">
                   <select name="txtFoodtype" type="Multiple">
                    <Option>Veg</option>
                    <Option>Non-Veg</option>
                    
                  </select>
                    
                  </div>
                </div>-->
				
				<div class="form-group" >
                    <label class="col-md-4 control-label">Date	:</label>
                 <div class="col-md-4" >
                    <input class="form-control input-append date" name="eventDate" id="datePicker" type="text" >
                  </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-4 control-label">Event location	:</label>
                 <div class="col-md-4">
                    <input class="form-control " name="event_location" required class="" id="" type="text" >
                  </div>
                </div>
				
				<div class="form-group">
                    <label class="col-md-4 control-label">Item List	:</label>
                 <div class="col-md-4">
	
                    <select id="box1" type="text" oninput="calculate()" name="menu" multiple="multiple"  class="3col active">
				 															 <?php
																 
include_once("user_config.php");
$sql = mysql_query("select * from tbl_items");
while ( $row = mysql_fetch_array( $sql ) ){ // Loop through the records
	$itemname = $row['itemname'];
	$itemprice = $row['itemprice'];
	//echo $itemname;
	echo "<option value='$itemprice'>$itemname $itemprice Rs/-</option>";
	
}
?>

														      <!---<option value="Company_Name">Company Name</option>
														         <option value="head_office_address">Head Office Address</option>
														        <option value="head_office_CityName">City</option>
														        <option value="IEC">IEC</option>
														        <option value="RCMCNO">RCMC No</option>
														        <option value="RCMCValidUpto">RCMC Valid Upto</option>
														        <option value="Membership_No">Membership No</option>
																  <option value="mobileforsmsalert">SMS Alert No</option>
														        <option value="head_office_TelNo">Head Office Tel No</option>
																  <option value="contactpersontelephone">Contact Person Tel No</option>
																  <option value="contactpersonmobileno">Contact Person Mob No</option>
														        <option value="contactpersonname">Contact Person</option>
														        <option value="head_office_email1">Head Office Email 1</option>
														        <option value="head_office_email2">Head Office Email 2</option>
														        <option value="head_office_email3">Head Office Email 3</option>
														        <option value="branchemail">Branch Emails</option>
														        <option value="factoryemail">Factory Emails</option>
														        <option value="contactpersonemail">Contact Person/Director Emails</option>
														        <option value="GST_no">GST NO</option>
														        <option value="head_office_StateName">State</option>
														        <option value="panel_name">Panel</option>
														        <option value="regional_office_name">Regional Office</option>
														        <option value="category_name">Category</option>
														        <option value="products_with_hscode">Hs Code</option>-->
														        
														
														    </select>
                  </div>
                </div>
                
               
				<div class="form-group">
                    <label class="col-md-4 control-label">No Of Persons	:</label>
                 <div class="col-md-4">
                    <input class="form-control" name="no_of_person" id="box2" required type="text" oninput="calculate()" >
                  </div>
                </div>
				<div class="form-group">
                    <label class="col-md-4 control-label">Total Amount:</label>
                 <div class="col-md-4">
                    <input class="form-control" name="total_amount" required id="result" >
                  </div>
                </div>
                 <!--<div class="form-group">
                    <label class="col-md-4 control-label">Food Specification	:</label>
                 <div class="col-md-6">
                 <textarea class="form-control " name="txtFSpecification" row="3" cols="15" onBlur="return ValidateComment()"></textarea>
                    
                  </div>
                </div>
                
                
                <div class="form-group">
                    <label class="col-md-4 control-label">Quantity	:</label>
                 <div class="col-md-6">
                 <textarea class="form-control " name="txtquantity" row="3" cols="15" onBlur="return ValidateComment()"></textarea>
                    
                  </div>
                </div>-->
                
                
                
                
                <div class="form-group">
				 <label class="col-md-1 control-label"></label>
                     <div class="col-md-4 col-xs-4 text-right"><input value="Submit" class="btn btn-info " input type="submit" name="btnsubmit" onClick="return ProcessForm()"></div>
               		  <div class="col-md-4 col-xs-4"><input value="Reset" class="btn btn-default"  input type="Reset" name="btnReset"></div>
                </div>
                
                
                
                
              </form>		

		</div>
		
	</div>
</div>

         	 
	           
	          <div class="items_desc">
	          	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Book Catering Services first You Have to Register Yourself <a href="registration.html">Go To Registration...</a></p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Already Register??? <a href="userlogin1.html">Click here to Login</p>
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
						
                         <p class="design">Design by <a href=""></a></p>
			 <div class="clear"></div>
		</div>	
   </div> 
   
   
<script type="text/javascript" src="js/ui.datepicker.js"></script>
<script type="text/javascript">
                $(document).ready(function() {
            		$('body').on('focus', '.getdate', function() {
            		  $(this).datepicker({ defaultDate: "",
					            		  changeMonth: true,
					            		  changeYear: true, 
					            		  numberOfMonths: 2, 
					            		  createButton:false, 
					            		  displayClose:true,
					            		  closeOnSelect:false, 
					            		  selectMultiple:true, 
					            		  dateFormat: 'dd-mm-yy'
			            		   });
            		   });
			        });//end of document ready
     </script>
	 <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" />
    <link href="css/jquery.multiselect.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/jquery.multiselect.js"></script>
   <script>
    $(function () {
        $('select[multiple].active.3col').multiselect({
            columns: 3,
            placeholder: 'Select Fields',
            search: true,
            searchOptions: {
                'default': 'Search Fields'
            },
            selectAll: true
        });

    });
</script>
<script>
$(document).ready(function() {
    $('#datePicker')
        .datepicker({
            format: 'mm/dd/yyyy'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#eventForm').formValidation('revalidateField', 'eventDate');
        });

    $('#eventForm')
        .formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: 'The name is required'
                        }
                    }
                },
                eventDate: {
                    validators: {
                        notEmpty: {
                            message: 'The date is required'
                        },
                        date: {
                            format: 'MM/DD/YYYY',
                            message: 'The date is not a valid'
                        }
                    }
                }
            }
        })
        .on('success.validator.fv', function(e, data) {
            if (data.field === 'eventDate' && data.validator === 'date' && data.result.date) {
                // The eventDate field passes the date validator
                // We can get the current date as a Javascript Date object
                var currentDate = data.result.date,
                    day         = currentDate.getDay();

                // If the selected date is Sunday
                if (day === 0) {
                    // Treat the field as invalid
                    data.fv
                        .updateStatus(data.field, data.fv.STATUS_INVALID, data.validator)
                        .updateMessage(data.field, data.validator, 'Please choose a day except Sunday');
                } else {
                    // Reset the message
                    data.fv.updateMessage(data.field, data.validator, 'The date is not valid');
                }
            }
        });
});
</script>



  </body>
 
</html>