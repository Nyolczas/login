<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bejelentkezés</title>
    <link rel="stylesheet" href="login-style.css">
</head>

<body>
    <div class="form">
        <form action="process.php" method="POST">

            <label for="username">Név:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Jelszó:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Bejelentkezés</button>

        </form>
    </div>

</body>

</html>