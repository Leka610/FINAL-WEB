<?php

    session_start();

    $username = '';
    $password = '';
    $errors = array(); 

    //connection to db
    $db = mysqli_connect('localhost', 'root', '', 'final_web');
?>
