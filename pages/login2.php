<?php
session_start();
include_once("dbcon.php");

extract($_GET);

$rs=mysql_query(" select * from registration where regid='$regid' and pass='$email' ");
if($rw=mysql_fetch_row($rs))
{
	$_SESSION["uid"]=$regid;
	$_SESSION["unm"]=$rw[1];
	header("Location: login3.php");
}
else
{
			// Query String
	header("Location: login1.php?abc=inv");
}
?>
