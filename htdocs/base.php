
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/css/nba.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    
</head>
<body> 
<?php
session_start();
echo "<nav class='navbar navbar-default'><div class='collapse navbar-collapse'><ul class='nav navbar-nav'>";
if(isset($_SESSION['account'])){
    
	echo "<li><a href=/logout.php>登出('$_SESSION[account]')</a></li>";
    echo "<li><a href=/member/memberUpdate.php?account=$_SESSION[account]>修改密碼</a></li>";
    echo "<li><a href=/member/memberDetail.php>下注歷史</a></li>";
    if ($_SESSION['account']=='admin'){
        echo "<li><a href=/member/member.php>會員管理</a></li>";
    }
	
	echo "<li><a href=/forum/forum.php>討論區</a></li>";
    echo "<li><a href=/game/game.php>比賽</a></li>";
    echo "<li><a href=/team/team.php>球隊</a></li>";
    echo "<li><a href=/player/player.php>球員</a></li>";
	echo "<li><a href=/index.php>首頁</a></li></div></nav>";
}else{
	echo '<li><a href=/login.php>登入</a></li>';	
    echo "<li><a href=/member/memberAdd.php>註冊</a></li>";
    echo "<li><a href=/index.php>首頁</a></li></div></nav>";
}
?>

    
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    
