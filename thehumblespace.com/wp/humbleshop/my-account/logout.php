<?php
setcookie('auth', NULL, -1);
session_start();
session_unset ();
if(session_destroy()){
header("Location: ../homepage-with-carousel/index.php");}
?>








