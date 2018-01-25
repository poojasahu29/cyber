<?php
class dbcon
{
	function __construct()
	{
		mysql_connect("localhost", "root", "");
		mysql_select_db("student");
	}
	function insert($name, $pass, $sal)
	{
		$rs=mysql_query(" select * from table order by e_id desc");
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
		$qry = " insert into table values('$cd', '$name', '$pass', $sal) ";
		mysql_query($qry);
		return $cd;
	}
}
?>
