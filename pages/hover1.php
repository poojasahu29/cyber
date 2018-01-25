
<?php
extract($_GET);
mysql_connect("localhost","root","");
mysql_select_db("student");


$rs=mysql_query(" select * from  registration order by regid desc ");
$cd="";
if($rw=mysql_fetch_row($rs))
{
	$cd1=$rw[0];
	$cd1=substr($cd1, 1);
	$n=$cd1;
	$n++;
	if($n>=0 && $n<10)
		$cd="F000".$n;
	else if($n>=10 && $n<100)
		$cd="F00".$n;
	else if($n>=100 && $n<1000)
		$cd="F0".$n;
	else if($n>=1000 && $n<10000)
		$cd="F".$n;
}
else
{
	$cd="F0001";
}
$qry="insert into registration values('$cd','$fnm','$lnm','$email','$reemail',$mobile,'$qualification','$date','$address','$gender')" or die ("$qry");
mysql_query($qry);
echo "<b>REMEMBER YOUR ID IS :</b><b>'$cd','$fnm','$lnm','$email','$reemail',$mobile,'$qualification','$date','$address','$gender'</b> <b>YOUR REGISTRATION IS SUCCESSFULLY  </b>";
?> 
