<?php
    session_start();//SESSSION INIT
    session_unset();//DISABLE SESSION
    session_destroy();

    header('location: index.php');
