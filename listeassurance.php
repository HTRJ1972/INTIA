<?php
$clients = [
    ['nom' => 'Dupont', 'prenom' => 'Jean', 'email' => 'jean.dupont@example.com', 'matricule' => 'C001', 'succursale' => 'Paris'],
    ['nom' => 'Martin', 'prenom' => 'Claire', 'email' => 'claire.martin@example.com', 'matricule' => 'C002', 'succursale' => 'Lyon']
];

$assurances = [
    ['matricule' => 'A001', 'client_nom' => 'Dupont', 'succursale' => 'Paris'],
    ['matricule' => 'A002', 'client_nom' => 'Martin', 'succursale' => 'Lyon']
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/liste.css">
    <title>Gestion Clients et Assurances</title>
</head>
<body>
    <nav>
        <a href="listeclient.php">Liste des Clients</a>
        <a href="listeassurance.php">Liste des Assurances</a>
        <a href="ajoutclient.php">Ajouter un client</a>
        <a href="ajoutassurance.php">Ajouter une assurances</a>
    </nav>
    <div id="content">
        <div id="clients">
            <h2>Liste des Clients</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Matricule</th>
                        <th>Succursale</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clients as $client): ?>
                        <tr>
                            <td><?= $client['nom']; ?></td>
                            <td><?= $client['prenom']; ?></td>
                            <td><?= $client['email']; ?></td>
                            <td><?= $client['matricule']; ?></td>
                            <td><?= $client['succursale']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div id="assurances">
            <h2>Liste des Assurances</h2>
            <table>
                <thead>
                    <tr>
                        <th>Matricule</th>
                        <th>Nom du Client</th>
                        <th>Succursale</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($assurances as $assurance): ?>
                        <tr>
                            <td><?= $assurance['matricule']; ?></td>
                            <td><?= $assurance['client_nom']; ?></td>
                            <td><?= $assurance['succursale']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
