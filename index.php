<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion Administrateur</title>
  <link rel="stylesheet" href="css/connexion.css">
</head>
<body>
  <div class="login-container">
    <h1>Connexion Administrateur</h1>
    <form action="traitement.php" method="POST">
      <label for="email">Adresse e-mail :</label>
      <input type="text" id="email" name="email" placeholder="Entrez votre e-mail" required>
      
      <label for="password">Mot de passe :</label>
      <input type="text" id="password" name="password" placeholder="Entrez votre mot de passe" required>
      
      <button type="submit" name="submit">Se connecter</button>
    </form>
  </div>
</body>
</html>
