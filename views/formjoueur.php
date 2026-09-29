<?php require "templates/header.php"; ?>

<main>

    <h2></h2>

    <form action="" method="post">

        <label for="prenom">prenom :</label>
        <input type="text" name="prenom" id="prenom">
    
    
        <label for="nom">nom :</label>
        <input type="text" name="nom" id="nom">
        
        
        <label for="age">age :</label>
        <input type="text" name="age" id="age">
        
        
        <label for="poste">poste :</label>
        <input type="text" name="poste" id="poste">
        
        
        <label for="poste_secondaire">poste secondaire :</label>
        <input type="text" name="poste_secondaire" id="poste_secondaire">
    
    
        <label for="nationalité">nationalité :</label>
        <input type="text" name="nationalité" id="nationalité">


        <button type="submit"></button>
    </form>
</main>

<?php 
require "templates/footer.php"; 
?>