<?php

function user_exist($user, $db)
{
    $sql    = "SELECT `id` FROM `utilisateurs` WHERE (`username`='$user' or `email`='$user');";
    $result = mysqli_query($db, $sql);
    $count  = mysqli_num_rows($result);
    if ($count == 1) {
        return true;
    } else {
        
        return false;
    }
    
}

?>