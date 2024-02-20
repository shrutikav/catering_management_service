<?php
include_once("user_config.php");
if(isset($_POST["btnsubmit"]))
{
	$name=$_POST["name"];
	$contact=$_POST["contact_number"];
	$eventDate=$_POST["eventDate"];
	$event_location=$_POST["event_location"];
	$menu=$_POST["menu"];
	$no_of_person=$_POST["no_of_person"];
	$total_amount=$_POST["total_amount"];
	
	echo "Welcome".$name;
	//header("location:userlogin.html");
	
	
	
$table=mysql_query("INSERT INTO `db_mangalmurti`.`tbl_orderr` ( `name`, `contact_number`, `eventDate`, `event_location`, `menu` , `no_of_person`, `total_amount`) VALUES ('$name', '$contact', '$eventDate', '$event_location', '$menu' , '$no_of_person', '$total_amount')");
if($table)
		{
echo "Application is submitted Successfully";
header("location:OrderSuccess.html");
}
}
	
?>