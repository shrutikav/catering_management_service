<?php
if(isset($_POST["btnsubmit"]))
{
	$name=$_POST["txtAname"];
	$contact=$_POST["txtAcontact"];
	$education=$_POST["txtAeducation"];
	$coursename=$_POST["txtAcoursename"];
	$batchtime=$_POST["txtAbatchtime"];
	echo "Welcome".$name;
	//header("location:userlogin.html");
	
}
$con=mysql_connect("localhost","root","") or die("mysql connection error");
mysql_select_db("db_institute", $con);
$table=mysql_query("INSERT INTO `db_institute`.`tbl_app` ( `app_name`, `app_contact`, `app_education`, `app_course`, `app_batch`) VALUES ('$name', '$contact', '$education', '$coursename', '$batchtime')");
if($table)
{
echo "Application is submitted Successfully";
header("location:ApplicationSuccess.html");
}
?>

