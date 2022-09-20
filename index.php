<?php
require __DIR__ . "/includes/registration_form.php";

/* Traitement de la requête */


$category_type = null;
if (isset($_GET["category_type"])) {
    $category_type = $_GET["category_type"];
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Guichet du Cinéma et Théâtre</title>
</head>

<body>
    <main>
        <h1>Guichet du Cinéma et Théâtre</h1>

        <!-- Formulaire de choix de type d'utilisateur -->
        <p>Plutôt Ciné ou Thêatre?</p>
        <form action="index.php" method="GET">
            <select name="category_type">
                <option value="Ticket" <?php if ($category_type == "Ticket") echo "selected"; ?>>Ticket</option>
                <option value="Cinema" <?php if ($category_type == "Cinema") echo "selected"; ?>>Cinema</option>
                <option value="Theater" <?php if ($category_type == "Theater") echo "selected"; ?>>Theater</option>
            </select>


            <input type="submit" value="Choisir" />
        </form>

        <!-- Foirmulaire d'inscription -->
        <?php if ($category_type != null) {
            show_registration_form($category_type);
        } ?>


    </main>

</body>

</html>