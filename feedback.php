<?php
if(isset($_POST["btnsubmit"]))
{
	$name=$_POST["txtFname"];
	$email=$_POST["txtFemail"];
	$contact=$_POST["txtFcontact"];
	$comments=$_POST["txtFcomment"];
	echo "Welcome".$name;
	
}
$con=mysql_connect("localhost","root","") or die("mysql connection error");
mysql_select_db("db_mangalmurti", $con);
$table=mysql_query("INSERT INTO `db_mangalmurti`.`tbl_feedback` (`f_name` ,`f_email` ,`f_contact` ,`f_comment` ) VALUES ('$name', '$email', '$contact', '$comments')");
if($table)
{
	header('location:feedbacksuccess.html');
}
?>

