<?php
include("../connect.php");
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	session_start();
	$account = $_POST["account"];
	$sql = "DELETE FROM member WHERE account='$account' ";
	$delecte = oci_parse($dbconn, $sql);
	oci_execute($delecte);
	$_SESSION['message'] = "刪除成功";
	header('Location: /member/member.php');
}
?>