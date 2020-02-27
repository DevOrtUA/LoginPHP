<?php include  'database.php'; ?>

<html>
<head>
    <title>Login/Logout</title>
</head>
<body>

    <h1>Benvenuto</h1>
    <form action="login.php" method="post">

        <input type="text" name="username">

        <input type="password" name="password">

        <button type="submit" name="login">Access</button>

    </form>

</body>
</html>