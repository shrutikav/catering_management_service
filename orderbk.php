<?php
if(isset($_POST["btnsubmit"]))
{
	$name=$_POST["txtName"];
	$contact=$_POST["txtContact"];
	$FoodType=$_POST["txtFoodtype"];
	$FoodSpecification=$_POST["txtFSpecification"];
	$Quantity=$_POST["txtquantity"];
	echo "Welcome".$name;
	//header("location:userlogin.html");
	
}
$con=mysql_connect("localhost","root","") or die("mysql connection error");
mysql_select_db("db_mangalmurti", $con);
$table=mysql_query("INSERT INTO `db_mangalmurti`.`tbl_order` ( `o_name`, `o_contact`, `o_type`, `o_foodspecification`, `o_quantity`) VALUES ('$name', '$contact', '$FoodType', '$FoodSpecification', '$Quantity')");
if($table)
{
echo "Application is submitted Successfully";
header("location:OrderSuccess.html");
}
?>

