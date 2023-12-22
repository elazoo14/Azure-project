
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLV CARSS</title>
    <link rel="stylesheet" href="style.css"> <!-- Update the CSS file link -->
</head>
<body>
    <div class="container">
        <form action="loginWork.php" method="post" class="styled-form">
            <h1>Connexion</h1>
            <div class="form-group">
                <label for="username">Nom de l'adhérent:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Se Connecter</button>
        </form>
    </div>
</body>
</html>