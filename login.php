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
            <p>
                <label for="user">Név:</label>
                <input type="text" id="user" name="user">
            </p>
            <p>
                <label for="pass">Jelszó:</label>
                <input type="password" id="pass" name="pass">
            </p>
            <p>
                <input type="submit" id="btn" value="Bejelentkezés">
            </p>
        </form>
    </div>
    
</body>
</html>