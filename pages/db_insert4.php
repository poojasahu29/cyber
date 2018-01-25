<center>
<?php

extract($_GET);
/*
$n1=$_GET["n1"];
$n2=$_GET["n2"];
$n3=$_GET["n3"];
*/

include_once("dbcon.php");

$rs=mysql_query(" select * from table2 order by e_id desc");
$cd="";
if($rw=mysql_fetch_row($rs))
{
	$cd1=$rw[0];
	$cd1=substr($cd1, 1);
	$n=$cd1;
	$n++;
	if($n>=0 && $n<10)
		$cd="E000".$n;
	else if($n>=10 && $n<100)
		$cd="E00".$n;
	else if($n>=100 && $n<1000)
		$cd="E0".$n;
	else if($n>=1000 && $n<10000)
		$cd="E".$n;
}
else
{
	$cd="E0001";
}
$qry = " insert into table2 values('$cd', '$n1', '$n2', $n3) ";
//echo $qry;
mysql_query($qry);
echo " Remember your ID : <b> $cd  </b>";
?>
