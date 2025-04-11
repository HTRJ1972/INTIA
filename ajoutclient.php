<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/connexion.css">
    <title>Gestion Clients et Assurances</title>
</head>
<body>
    <nav>
        <a href="listeclient.php">Liste des Clients</a>
        <a href="listeassurance.php">Liste des Assurances</a>
        <a href="ajoutclient.php">Ajouter un client</a>
        <a href="ajoutassurance.php">Ajouter une assurances</a>
    </nav>
     <div class="login-container">
    <h1>Ajouter un client</h1>
    <form action="ajclient.php" method="POST">
      <label for="nom">Nom du client:</label>
      <input type="text" id="nomclient" name="nomclient" placeholder="Entrez le nom du client" required>
      
      <label for="prenom">Prenom du client:</label>
      <input type="text" id="prenomclient" name="prenomclient" placeholder="Entrez le prenom du client" required>

      <label for="email">E-mail du client:</label>
      <input type="text" id="emailclient" name="emailclient" placeholder="Entrez l'e-mail du client" required>
      
      <label for="Matricule">Matricule du client:</label>
      <input type="text" id="matricule" name="matricule" placeholder="Entrez le matricule du client" required>
      
      <button type="submit" name="submit">Enregistrer</button>
    </form>
  </div>
</body>
</html>
