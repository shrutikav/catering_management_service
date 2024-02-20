<?php
session_start();
if(session_destroy())
{
	//setcookie(PHPSESSID,session_id(),time()-1);
	header("location:index.html");
}
?>