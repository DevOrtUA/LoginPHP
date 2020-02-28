<?php

    $server = "eu-cdbr-west-02.cleardb.net";
    $username = "bf4762acadbdf4";
    $password = "48baa9aa";
    $database = "heroku_36d91ccb9e97f8f";

    $connection = mysqli_connect($server, $username, $password, $database);

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
