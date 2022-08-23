<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "ticket";

    $connect = new mysqli($host, $user, $password, $database);

    if (mysqli_connect_errno()) {
        trigger_error('Failed connect to mysql: '  . mysqli_connect_error(), E_USER_ERROR);
    }
