<?php include  'database.php'; ?>

<html>
<head>
    <title>Index</title>
</head>
<body>

    <h1>Welcome</h1>

    <form action="login.php" method="post">

        <input type="text" name="username" placeholder="Inserisci il tuo username" required><br>

        <input type="password" name="password" placeholder="Inserisci la tua password" required><br><br>

        <button type="submit" name="login">Login</button>

    </form>

    <span>utente 1:</span>
    <span>ulises</span>
    <span>123</span>
    <span>admin</span><br>
    <span>utente 2:</span>
    <span>pippo</span>
    <span>123</span>
    <span>senza ruolo</span>

</body>
</html>