<?php 
require "templates/header.php"; 
?>

<main>

    <h2>Formulaire de recompense</h2>
    
    <form action="" method="post">

        <label for="nom">nom :</label>
        <input type="text" name="nom" id="nom">

        <label for="annee">année :</label>
        <input type="text" name="annee" id="annee">
        
        <button type="submit">valider</button>
    </form>
</main>

<?php 
require "templates/footer.php"; 
?>