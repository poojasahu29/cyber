<center>
<?php
$s1=$_GET["n1"];
$s2=$_GET["n2"];
$s3=$_GET["n3"];
$s4=$_GET["n4"];

mysql_connect("localhost","root","");
mysql_select_db("student");

$qry = " insert into table values('$s1', '$s2', '$s3',) ";
echo $qry;
mysql_query($qry);
?>
Success ..
