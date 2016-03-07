<?php
include("../connect.php");
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	session_start();
	$id = $_POST["id"];
	$sql = "DELETE FROM forum WHERE id='$id' ";
	$delecte = oci_parse($dbconn, $sql);
	oci_execute($delecte);
	$_SESSION['message'] = "刪除成功";
	header('Location: /forum/forum.php');
}
?>