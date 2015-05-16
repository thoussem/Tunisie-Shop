<?php
include('conf.php');
session_start();
if(isset($_SESSION['login_user']) ){
	if(isset($_SESSION['login_user']))
	{$verif_user=$_SESSION['login_user'];}
	else
		{$verif_user=$_COOKIE['auth'];}

$ses_sql=mysqli_query($conn,"SELECT `username`,`nom`,`prenom` FROM `utilisateurs` WHERE (`username`='$verif_user' or `email`='$verif_user'); ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session=$row['username'];
$nom=$row['nom'];
$prenom=$row['prenom'];
setcookie('auth',$login_session,time()+3600*24*3);
}
/* OR isset($_COOKIE['auth']) */
?>