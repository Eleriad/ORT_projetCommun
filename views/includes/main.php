<section id="corp" class="container-fluid" style="background: white;">
    <div class="row">
        <?php
        // Insertion menu de gauche
        require_once("sideMenu.php");

        // vérification de la connexion user
        if ($connected) {
            // on regarde qu'une page spécifique a bien été appelée
            if (isset($arrayVar['Page'])) {
                // on stocke la variable de la page appelée dans une variable
                $pageCalled = $arrayVar['Page'];
                // on regarde de quelle page il s'agit
                switch ($pageCalled) {
                        // Page utilisateur
                    case 'Users':
                        require_once("addUser.php");
                        break;
                        // page Statistiques
                    case 'Statistics':
                        require_once("statistics.php");
                        break;
                        // Page par défaut si aucun case trouvé
                    default:
                        require_once("listedesproduits.php");
                }
                // Sinon on charge la liste produit par défaut
            } else {
                require_once("listedesproduits.php");
            }
            // Si la connexion n'est pas valide, on charge la page de connexion
        } else {
            require_once("mainConnexion.php");
        }
        ?>
    </div>
</section>