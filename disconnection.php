<?php
    session_start();//SESSSION INIT
    session_unset();//DISABLE SESSION
    session_destroy();

    setcookie('log', '', time()-3444, '/', null, false, true);//DISABLE COOKIE

    header('location: index.php');
