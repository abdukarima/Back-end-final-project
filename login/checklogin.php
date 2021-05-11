<?php 
    $uid = $_POST['uid'];
    $pw = $_POST['pw'];

    if($uid == 'asd' and $pw == 'asd123')
    {
        session_start();
        $_SESSION['sid'] = session_id();
         $_SESSION['uid'] = $uid;
        header('location:securepage.php');
    }
    else
    {
          header('location:index.php');
    }
?>