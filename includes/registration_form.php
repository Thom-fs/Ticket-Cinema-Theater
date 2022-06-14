<?php

/**
 * Affichage du formulaire d'inscription
 */
function show_registration_form(string $category_type = "Ticket")
{ ?>
    <h2>
        <?php
        switch ($category_type) {
            case "Cinema":
                echo "Cinema";
                break;
            case "Theater":
                echo "Theater";
                break;
            default:
                echo "Veulliez sélectionner une catégorie";
        }
        ?>
    </h2>
    <form action="register.php" method="post">

        <?php if ($category_type == "Cinema") { ?>
            <select name="category">
                <option value="enfant">Tarif enfant</option>
                <option value="adulte">Tarif adulte</option>
                <!-- <input type="submit" value="valider" /> -->
            </select>

            <div>
                <br>
                <label>Date :</label>
                <input class="" type="date" name="date" />
            </div>

            <div>
                <label>Place :</label>
                <input class="" type="text" name="place" value="9B" /> <br>
            </div>

            <div>
                <label for="choice">Film choisi :</label>
                <input type="text" name="choice" value="Batman">
            </div>

            <div>
                <label for="movieRoom">La salle:</label>
                <input type="text" name="movieRoom" value="4">
            </div>

            <div>
                <label for="checkAge">Age:</label>
                <input type="text" name="checkAge" value="27">
            </div>
            <div>
                <label for="time">L'heure de la séance:</label>
                <input type="time" name="time">
            </div>

            <input type="submit" value="S'inscrire" />

        <?php } ?>

        <?php if ($category_type == "Theater") { ?>
            <select name="category">
                <option value="enfant">Tarif enfant</option>
                <option value="adulte">Tarif adulte</option>
                <!-- <input type="submit" value="valider" /> -->
            </select>

            <div>
                <br>
                <label>Date :</label>
                <input class="" type="date" name="date" />
            </div>

            <div>
                <label>Place :</label>
                <input class="" type="text" name="place" placeholder="place" /> <br>
            </div>
            <div>
                <label for="choiceTheater">La pièce choisie:</label>
                <input type="text" name="choiceTheater">
            </div>
            <div>
                <label for="startTime">L'heure de début:</label>
                <input type="time" name="startTime">
            </div>
            <div>
                <label for="intermission">L'heure de l'entracte :</label>
                <input type="time" name="intermission">
            </div>

            <input type="submit" value="S'inscrire" />

        <?php } ?>

        <input type="hidden" name="category_type" value="<?= $category_type ?>" />


    </form>
<?php }
