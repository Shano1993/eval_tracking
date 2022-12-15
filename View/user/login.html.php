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

    <h2>Connexion</h2>

    <form action="/?c=user&a=login" method="post" class="formUser">
        <div>
            <label for="email">Adresse Email</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password">
        </div>

        <input type="submit" name="save" value="Se connecter">
    </form>

</body>
</html>
