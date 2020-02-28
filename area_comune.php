<?php include  'database.php'; ?>
<?php session_start(); ?>

<?php

?>

<html>

<head>
    <title>Area Comune</title>
</head>

<body>
    <nav>
        <a href="logout.php">Logout</a>
    </nav>

    <h1>Area comune</h1>
    <h3>Welcome! <?php echo $_SESSION['username']?></h3>

</body>

</html>