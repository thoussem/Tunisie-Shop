<?php
include('conf.php');
$login_session;
if(isset($_SESSION['login_user']) OR isset($_COOKIE['auth'])){
	if(isset($_SESSION['login_user']))
	{$verif_user=$_SESSION['login_user'];}
	else
		{$verif_user=$_COOKIE['auth'];}

$ses_sql=mysqli_query($conn,"SELECT * FROM `utilisateurs` WHERE (`username`='$verif_user' or `email`='$verif_user'); ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session=$row['username'];
$id=$row['id'];
$nom=$row['nom'];
$prenom=$row['prenom'];
$titre=$row['titre'];
$email=$row['email'];
setcookie('auth',$login_session,time()+3600*24*3);
}

?>