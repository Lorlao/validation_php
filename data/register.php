<?php
include"template/header.php";
?>
<main>
    <br><br>
    <form action="data.php" method="POST" class="connexion">

        <label for="username" class="label">Identifiant/E-mail</label>
        <input type="name" name="username" placeholder="Votre pseudo..." >
    <br>
        <label for="password" class="label">Mot de passe</label>
        <input type="password" name="password" placeholder="Votre mot de passe" >

        <br>
        <input type="submit" value="Se connecter">
    </form>
</main>

<?php
include"template/footer.php";
?>