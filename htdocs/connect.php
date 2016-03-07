<?php
$db_AC = "db1_11"; 
$db_PW = "db1_11";
$db_connStr = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 163.17.9.68)(PORT = 1521)))(CONNECT_DATA=(SID=db)))";
$dbconn = OCILogon($db_AC,$db_PW,$db_connStr,"UTF8");
/*
if($dbconn){
  echo "<br />連結成功!<br />";
}else{
  echo "<br />連結失敗!<br />";
}
*/
?>