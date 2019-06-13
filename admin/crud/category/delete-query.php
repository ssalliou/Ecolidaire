<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../model/database.php";

// Récupérer l'id de la ligne à supprimer
$id = $_POST["id"];

// Supprimer la ligne en base de données
$errCode = deleteRow("category", $id);

if ($errCode) {
    $_SESSION["flash"][] = ["type" => "danger", "message" => "Impossible de supprimer cet élément !"];
} else {
    $_SESSION["flash"][] = ["type" => "success", "message" => "Elément supprimé avec succès !"];
}

// Rediriger l'utilisateur
header("Location: index.php");