<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
<legend>Ajout de personne</legend>
<label for="nomComplet">Nom complet</label>
   <form action="traitement.php" method="post">
   <input type="text" name="name" placeholder="Votre nom complet" id="nomComplet">
   <br>
   <label for="email">Email</label>
   <input type="email" placeholder="votre email" name="email" id="email">
   <br>
   <label for="tel">Telephone</label>
   <input type="tel" placeholder="votre telephone" name="tel" id="tel">
   <br>
   <label for="passe">Mot de passe</label>
   <input type="password" id="passe" name="passe">
   <br>
   <label for="conf">Confirmer mot de passe</label>
   <input type="password" id="conf" name="conf">
   <br>
   <button type="submit">S'inscrire</button>
   <button type="reset">Vider les donnees</button>
   </form>
</fieldset>
</body>
</html>