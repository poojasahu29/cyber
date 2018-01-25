<center>
<?php
$s1=$_GET["n1"];
$s2=$_GET["n2"];
$s3=$_GET["n3"];

mysql_connect("localhost", "root", "");
mysql_select_db("student");

$rs=mysql_query(" select * from table where name='$s1' ");
if($rw=mysql_fetch_row($rs))
{
	echo "Already exists ..";
}
else
{
	$qry = " insert into table values('$s1', '$s2', $s3) ";
	echo $qry;
	mysql_query($qry);
	echo "Success ..";
}
?>
