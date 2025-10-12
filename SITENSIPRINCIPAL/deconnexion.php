<?php 
session_start();
$_SESSION["token"] = 1;
header('Location: index.html');
exit();

?>