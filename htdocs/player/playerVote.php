<?php
include("../connect.php");
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	session_start();
	$id = $_POST["playerId"];
    $account = $_SESSION['account'];
    $vote = $_POST["vote"];
    
    if ($vote=="投票++"){
    	$sql = "INSERT INTO playerVote (account, player) VALUES ('$account', '$id')";
        $delecte = oci_parse($dbconn, $sql);
        oci_execute($delecte);

        $sql2 = "update player set voteNum = voteNum +1 where id ='$id' ";
        $xx = oci_parse($dbconn, $sql2);
        oci_execute($xx);
    }else if($vote=="投票--"){
        
        $sql = "DELETE FROM playerVote WHERE account='$account' and player='$id' ";
        $delecte = oci_parse($dbconn, $sql);
        oci_execute($delecte);

        $sql2 = "update player set voteNum = voteNum -1 where id='$id' ";
        $xx = oci_parse($dbconn, $sql2);
        oci_execute($xx);
    }
    if ($_SESSION['account']=='admin'){
        header("Location: /player/player.php");
    }else {
        $_SESSION['message'] = "投票完成";
        header("Location: /player/playerDetail.php?id=$id");
    }
    
    
	
}
?>