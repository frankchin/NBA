<?php 
session_start();
include("../connect.php");
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $coin = $_POST['coin'];
    $coin += 100;
    $account = $_SESSION['account'];
    $sql = "UPDATE member SET coin='$coin' WHERE account='$account'";
    $update = oci_parse($dbconn, $sql);
    oci_execute($update);
    $_SESSION['message'] = "簽到成功";
    header('Location: /member/memberDetail.php');
    
}

?>