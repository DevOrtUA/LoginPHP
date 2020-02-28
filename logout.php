<?php include  'database.php' ?>
<?php session_start(); ?>

<?php
//a mano o usare il destroy()
$_SESSION['username'] = null;
$_SESSION['password'] = null;
$_SESSION['role'] = null;

session_destroy();

header('Location: index.php');

?>