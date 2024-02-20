<?php
session_start();
if(isset($_POST['btnsubmit']))
{
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('db_mangalmurti') or die(mysql_error());
 $name=$_POST['txtuname'];
 $pwd=$_POST['txtupass'];
 if($name!=''&&$pwd!='')
 {
   $query=mysql_query("select * from tbl_reg where reg_login='".$name."' and reg_pwd='".$pwd."'") or die(mysql_error());
   
   $res=mysql_fetch_row($query);

   if($res)
   {
    $_SESSION['reg_login']=$name;
    header('location:order.php');

   }
   else
   {
    header('location:Loginfailed.html');
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>