<?php
require_once __DIR__ . "/model/database.php";

$id = $_GET["id"];
$category = getOneRow("category", $id);
$projects = getAllProjectsByCategory($id);

require_once __DIR__ . "/layout/header.php";
?>

    <section class="container">
        <h1>Catégorie : <?= $category["label"]; ?></h1>

        <div class="actions">
            <?php foreach ($projects as $project) : ?>
                <?php include __DIR__ . "/include/project_inc.php"; ?>
            <?php endforeach; ?>
        </div>

    </section>


<?php require_once __DIR__ . "/layout/footer.php"; ?>