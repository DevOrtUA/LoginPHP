<?php include  'database.php'; ?>
<?php session_start(); ?>

<?php
    if($_SESSION['role'] !==admin) {
        header('Location: area_comune.php');
    }
?>

<html>

<head>
    <title>AREA RISERVATA</title>
</head>

<body>
    <nav>
        <a href="logout.php">Logout</a>
    </nav>

    <h1>Area riservata admin</h1>
    <h3>Welcome! <?php echo $_SESSION['username']?></h3>

</body>

</html>