<?php

/* Imports */
include __DIR__ . "/class/Ticket.class.php";
include __DIR__ . "/class/Cinema.class.php";
include __DIR__ . "/class/Theater.class.php";

require __DIR__ . '/includes/registration_summary.php';


/* Vérification du verbe HTTP */
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    http_response_code(405); // Code HTTP Method Not Allowed (Verbe HTTP non autorisé)
    die(); // Arrêt du script
}

/* Récupération des valeurs  */
$category_type = $_POST["category_type"]; // Type d'utilisateur
$date = $_POST["date"];
$place = $_POST["place"];
$category = $_POST["category"];

if ($category_type == "Cinema" || $category_type == "Theater") {
    $choice = $_POST["choice"]; // Le film choisi
    $movieRoom = $_POST["movieRoom"];
    $incocheckAgeme = $_POST["checkAge"];
    $time = $_POST["time"];
}

if ($category_type == "Theater") {
    $choiceTheater = $_POST["choiceTheater"]; //La pièce choisie
    $startTime = $_POST["startTime"]; // l'heure de début
    $intermission = $_POST["intermission"]; // L'heure de l'entracte
}


/* Création de l'utilisateur */
if ($category_type == "Cinema") {
    $category = new Cinema($date, $place, $category, $choice, $movieRoom, $checkAge, $time);
} else if ($category_type == "Theater") {
    $category = new Theater($date, $place, $category, $choice, $choiceTheater,  $startTime, $intermission);
} else {
    $category = null;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>

<body>
    <?php if ($category == null) { ?>
        <p> Erreur, veuillez choisir une catégorie (Cinéma / Théâtre) </p>
    <?php } else {
        show_registration_summary($category_type, $category);
    } ?>
</body>

</html>