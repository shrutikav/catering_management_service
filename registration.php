<?php
include_once("user_config.php");
if(isset($_POST["btnsubmit"]))
{
	$name=$_POST["txtRname"];
	$address=$_POST["txtRaddress"];
	$contact=$_POST["txtRcontact"];
	$email=$_POST["txtRemail"];
	$question=$_POST["txtRquestion"];
	$answer=$_POST["txtRanswer"];
	$loginname=$_POST["txtRloginname"];
	$password=$_POST["txtRpassword"];
	$confirmpass=$_POST["txtRconfirmpass"];
	$select = mysql_query("select * from tbl_reg where reg_email =  '$email'");
	if(mysql_num_rows($select)) 
	{
		echo "<script>
		alert('This email is already being used');
window.location.href='registration.html';

</script>";
		//exit('This email is already being used');
		//header("location:resgistration.html");
	}
	//echo "Welcome".$name;
	else
	{
		$table=mysql_query("INSERT INTO `tbl_reg` ( `reg_name`, `reg_add`, `reg_contact`, `reg_email`, `reg_squestion`, `reg_sans`, `reg_login`, `reg_pwd`, `reg_cpwd`) VALUES ('$name', '$address','$contact','$email', '$question', '$answer', '$loginname', '$password', '$confirmpass')");
		if($table)
		{
		echo "Registration is done Successfully";
		header("location:userlogin1.html");
		}
	}
	
}
//$con=mysql_connect("localhost","root","") or die("mysql connection error");
//mysql_select_db("db_mangalmurti", $con);

?>

