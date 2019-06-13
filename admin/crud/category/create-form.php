<?php require_once __DIR__ . "/../../layout/header.php"; ?>

    <h1>Créer une catégorie</h1>

    <form method="post" action="create-query.php">
        <div class="form-group">
            <label>Libellé</label>
            <input type="text" name="label" class="form-control" placeholder="Libellé" required>
        </div>
        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i>
            Ajouter
        </button>
    </form>

<?php require_once __DIR__ . "/../../layout/footer.php"; ?>