<?php 
session_start();
if (isset($_SESSION['account'])){
    unset($_SESSION['account']);
    header('Location: index.php');
}

?>