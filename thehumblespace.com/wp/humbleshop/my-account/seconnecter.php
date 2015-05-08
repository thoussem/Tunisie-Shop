<?php

$error        = "";
$pass_error   = "";
$user_error   = "";
$reg_username = "";
$username     = "";
$titre        = "";
$email        = "";
$nom          = "";
$pre          = "";
$pass1        = "";
$pass2        = "";
$success      = "";

if (isset($_POST['seconnecter'])) {
    // username and password sent from form 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql      = "SELECT `id` FROM `utilisateurs` WHERE (`username`='$username' or `email`='$username') AND `password`='$password' ;";
    $result   = mysqli_query($conn, $sql);
    $count    = mysqli_num_rows($result);
    // If result matched $myusername and $mypassword, table row must be 1 row
    
    if ($count == 1) {
        $_SESSION['login_user'] = $username;
        
        if (isset($_POST['rememberme'])) {
            setcookie('auth', $username, time() + 3600 * 24 * 3);
        }
        
        header("location: ../homepage-with-carousel/index.php");
    } else {
        $error = "* Le nom d'Utilisateur ou le Mot de passe est Incorrecte";
    }
    
}

?>