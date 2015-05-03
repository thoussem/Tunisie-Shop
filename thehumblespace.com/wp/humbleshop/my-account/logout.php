<?php
setcookie('auth','',time()-3600);
if(session_destroy())
{
header("Location: index.php");
}
?>









