<main class="container-fluid">
    <div class="row">
        <?php
        // Appel de la colonne de gauche
        require_once("sideMenu.php");

        // On vérifie si l'utilisateur est déjà connecté ou non
        if ($ifUser) {
            // Si oui, on affiche le stock
            require_once("tableView.php");
        } else {
            // Si non, on affiche le formulaire de connexion
            require_once("connexion.php");
        }
        ?>
    </div>
</main>