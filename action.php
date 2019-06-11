// A MODIFIER pour ECOLIDAIRE


<?php
require_once __DIR__ . "/model/database.php";

$id = $_GET["id"]; // Récupérer l'id dans l'url
$recipe = getOneRecipe($id); // SELECT * FROM recipe WHERE id = ??

require_once __DIR__ . "/layout/header.php";
?>

    <section>
        <h1><?= $recipe["title"]; ?></h1>
        <?= $recipe["preparation_time"]; ?>
    </section>

<?php require_once __DIR__ . "/layout/footer.php"; ?>