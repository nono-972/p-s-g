<?php require "templates/header.php" ?>

<main>
<h1>l'effectif du Psg</h1>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Âge</th>
            <th>Poste</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($joueurs as $joueur): ?>
        <tr>
            <td><?= $joueur->nom ?></td>
            <td><?= $joueur->prenom ?></td>
            <td><?= $joueur->age ?></td>
            <td><?= $joueur->poste ?></td>
            <td><?= $joueur->poste_secondaire ?></td>
            <td><?= $joueur->nationalité ?></td>
       </tr>
     <?php endforeach; ?>
    </tbody>
</table>
</main>
   <?php require "templates/footer.php" ?> 
</body>
</html>