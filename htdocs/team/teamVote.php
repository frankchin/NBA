<?php
include("../connect.php");
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	session_start();
	$id = $_POST["teamId"];
    $account = $_SESSION['account'];
    $vote = $_POST["vote"];
    
    if ($vote=="投票++"){
    	$sql = "INSERT INTO teamVote (account, team) VALUES ('$account', '$id')";
        $delecte = oci_parse($dbconn, $sql);
        oci_execute($delecte);

        $sql2 = "update team set voteNum = voteNum +1 where id ='$id' ";
        $xx = oci_parse($dbconn, $sql2);
        oci_execute($xx);
    }else if($vote=="投票--"){
        
        $sql = "DELETE FROM teamVote WHERE account='$account' and team='$id' ";
        $delecte = oci_parse($dbconn, $sql);
        oci_execute($delecte);

        $sql2 = "update team set voteNum = voteNum -1 where id='$id' ";
        $xx = oci_parse($dbconn, $sql2);
        oci_execute($xx);
    }
    if ($_SESSION['account']=='admin'){
        header("Location: /team/team.php");
    }else {
        $_SESSION['message'] = "投票完成";
        header("Location: /team/teamDetail.php?id=$id");
    }
    
    
	
}
?>