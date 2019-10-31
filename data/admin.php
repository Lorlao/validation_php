<?php
include"template/header.php";
?>

<form action="data.php" method="POST" class="choice">
    <br><br>
    <label for="choice" class="title_choice">Fais ton choix :</label>
    <br><br>
        <input type="checkbox" name="preferences"> Voir l'image
        <input type="checkbox" name="preferences">Lire le texte 1 
        <input type="checkbox" name="preferences">Lire le texte 2 
    <br><br>
        <input type="submit" value="Valide ton choix">
</form>
<?php
include"template/footer.php";

