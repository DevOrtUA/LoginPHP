<?php include  'database.php' ?>
<?php session_start(); ?>

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

        $username_db = $row['username'];
        $password_db = $row['password'];
        $role_db = $row['role'];
    }

    if($username === $username_db && $password === $password_db) {

        $_SESSION['username'] = $username_db;
        $_SESSION['password'] = $password_db;
        $_SESSION['role'] = $role_db;
        header('Location:area_riservata.php');
    }else {
        header('Location:index.php');
    }

}
?>
