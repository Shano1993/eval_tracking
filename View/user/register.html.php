<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Time Tracking</title>
</head>
<body>

    <h2>Inscription</h2>

    <form action="/?c=user&a=register" method="post" class="formUser">
        <div>
            <label for="email">Adresse Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="passwordRepeat">Mot de passe vérification</label>
            <input type="password" name="passwordRepeat" id="passwordRepeat">
        </div>

        <input type="submit" name="save" value="Inscription">
    </form>

</body>
</html>
