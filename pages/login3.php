<?php
session_start();

$eid=$_SESSION["uid"];
if(strcmp($eid, "")==0)
{
	echo " Kripya login karke aaye !!";
}
else
{
	$nm=$_SESSION["unm"];
	echo "<center> Welcome .. <b> $nm ( $eid ) </b> ";
	echo "<p> <a href=logout.php> Sign out </a> ";
}
?>

