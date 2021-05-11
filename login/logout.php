<?php

    session_start();
    if(!session_destroy())
    {
        echo "Failed to log out";
    }
    else
    {
        echo "Logged out successfully";
        header('location:index.php');
    }
?>