<?php
    $server = "eu-cdbr-west-02.cleardb.net/heroku_36d91ccb9e97f8f";
    $username = "bf4762acadbdf4";
    $password = "48baa9aa";
    $database = "heroku_36d91ccb9e97f8f";

    $connection = new mysqli($server, $username, $password, $database);

    echo "Connected successfully";


?>
