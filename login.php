<?php include  'database.php' ?>

<?php

if(isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM user WHERE username = '{$username}' ";

    $trova_utente = mysqli_query($connection, $query);

    if (!$trova_utente) {
        die('Richiesta fallita' . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_array($trova_utente)) {

        //$idUser = $row['id'];
        $username = $row['username'];
        $password = $row['password'];
    }
}
?>
