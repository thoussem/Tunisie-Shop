<?php
setcookie('auth','',time()-3600);
session_start();
if(session_destroy())
header("Location: index.php");
?>









