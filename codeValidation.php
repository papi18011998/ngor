<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation de votre compte</title>
</head>
<body>
    <fieldset>
    <legend>Un code vous a ete envoye dans votre boite mail mettez le</legend>
    <form action="traitement.php" method="post">
        <label for="code">Code de Validation</label>
        <input type="text" placeholder="mettez votre code de validation" name="code">
        <button type="submit" name="getCode">Valider</button>
    </form>
    </fieldset>
</body>
</html>