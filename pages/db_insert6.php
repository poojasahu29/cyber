<center>
<?php

extract($_GET);

include_once("dbcon1.inc.php");

$db=new dbcon;
$db->setName($n1);
$db->setPass($n2);
$db->setSal($n3);
//$eid=$db->insert();
echo " Remember your ID : <b> $eid  </b> for the user name : $this->getName()";
?>
