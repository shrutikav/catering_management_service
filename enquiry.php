
<?php
if(isset($_POST["btnsubmit"]))
{
	$ename=$_POST["txtEname"];
	$eemail=$_POST["txtEemail"];
	$eaddress=$_POST["txtEaddress"];
	$econtact=$_POST["txtEcontact"];
	$equestions=$_POST["txtEquestion"];
	echo $ename;
	
}
$con=mysql_connect("localhost","root","") or die("mysql connection error");
mysql_select_db("db_mangalmurti", $con);
$table=mysql_query("INSERT INTO `db_mangalmurti`.`tbl_enquiry` (`en_name` ,`en_email` ,`en_add` ,`en_contact` ,`en_question` ) VALUES ('$ename', '$eemail', '$eaddress', '$econtact', '$equestions')");
if($table)
{
	header('location:enquirysuccess.html');
}
?>
