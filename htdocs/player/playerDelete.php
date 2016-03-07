<?php
include("../connect.php");
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	session_start();
	$id = $_POST["id"];
	$sql = "DELETE FROM player WHERE id='$id' ";
	$delecte = oci_parse($dbconn, $sql);
	oci_execute($delecte);
	$_SESSION['message'] = "刪除完成";
	header('Location: /player/player.php');
}
?>