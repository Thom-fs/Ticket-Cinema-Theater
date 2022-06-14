<?php

/* Affichage du récapitulatif de l'inscription */
function show_registration_summary(string $category_type, Ticket | Cinema | Theater $category)
{ ?>
    <p> Ticket validé </p>
    <table>

        <?php if ($category_type == "Cinema") { ?>
            <tr>
                <th>Date</th>
                <td><?= $category->date ?></td>
            </tr>
            <tr>
                <th>Place</th>
                <td><?= $category->place ?></td>
            </tr>
            <tr>
                <th>Categorie</th>
                <td><?= $category->category ?></td>
            </tr>
            <tr>
                <th>choice</th>
                <td><?= $category->choice ?></td>
            </tr>
            <tr>
                <th>movieRoom</th>
                <td><?= $category->movieRoom ?></td>
            </tr>
            <tr>
                <th>checkAge</th>
                <td><?= $category->checkAge ?></td>
            </tr>
            <tr>
                <th>time</th>
                <td><?= $category->time ?></td>
            </tr>
        <?php } ?>

        <?php if ($category_type == "Theater") { ?>
            <tr>
                <th>Date</th>
                <td><?= $category->date ?></td>
            </tr>
            <tr>
                <th>Place</th>
                <td><?= $category->place ?></td>
            </tr>
            <tr>
                <th>Categorie</th>
                <td><?= $category->category ?></td>
            </tr>
            <tr>
                <th>choiceTheater</th>
                <td><?= $category->choiceTheater ?></td>
            </tr>
            <tr>
                <th>startTime</th>
                <td><?= $category->startTime ?></td>
            </tr>
            <tr>
                <th>intermission</th>
                <td><?= $category->intermission ?></td>
            </tr>
        <?php } ?>
    </table>
<?php }
