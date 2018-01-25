<center>
<?php

extract($_GET);

include_once("dbcon.inc.php");

$db=new dbcon;
$eid=$db->insert($n1, $n2, $n3);
echo " Remember your ID : <b> $eid  </b>";
?>
