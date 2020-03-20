<!-- Début du main -->
<main>
    <div class="container-fluid">
        <!-- Colonne de gauche -->
        <div class="row">
            <div class="col col-lg-2 bg-light">
                <!-- Infos utilisateur -->
                <div class="row admin">
                    <div class="col col-md-4">
                        <img src="../component/img/imgProfil.jpg" alt="" type="jpg" class="img-thumbnail">
                    </div>
                    <div class="col col-md-8">
                        <strong>admin</strong><br>
                        Profil <br>
                        <i class="fas fa-lock"></i><a href="#"> Déconnexion</a>
                    </div>
                </div>
                <!-- Tableau de bord -->
                <div class="row tableauDeBord">
                    <div class="col col-md-2"><i class="fas fa-desktop fa-2x"></i></div>
                    <div class="col col-md-10 h5 text-left text-uppercase">tableau de bord</div>
                </div>
                <!-- Icones -->
                <div class="row">
                    <table class="table table-borderless tableActions">
                        <tbody class="">
                            <tr>
                                <td class="">
                                    <div class="card entrees" style="max-width: 18rem;">
                                        <i class="fas fa-shopping-cart fa-2x"></i>
                                        <p class="card-text">Entrées</p>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="card sorties" style="max-width: 18rem;">
                                        <i class="fas fa-shopping-cart fa-2x"></i>
                                        <p class="card-text">Sorties</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                                <td class="">
                                    <div class="card utilisateurs" style="max-width: 18rem;">
                                        <i class="fas fa-user fa-2x"></i>
                                        <p class="card-text">Utilisateurs</p>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="card statistiques" style="max-width: 18rem;">
                                        <i class="far fa-chart-bar fa-2x"></i>
                                        <p class="card-text">Statistiques</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <div class="card stock" style="max-width: 18rem;">
                                        <i class="fas fa-warehouse fa-2x"></i>
                                        <p class="card-text">Stock</p>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="card journal" style="max-width: 18rem;">
                                        <i class="far fa-clock fa-2x"></i>
                                        <p class="card-text">Journal</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <div class="card client" style="max-width: 18rem;">
                                        <i class="fas fa-user fa-2x"></i>
                                        <p class="card-text">Client</p>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="card categories" style="max-width: 18rem;">
                                        <i class="fas fa-sitemap fa-2x"></i>
                                        <p class="card-text">Catégories</p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Affichage écran principal -->
            <div class="col col-lg-10">
                <div class="tableau">
                    <!-- Titre -->
                    <div class="titre">Liste des produits</div>

                    <!-- En-tête du tableau -->
                    <div class="entete">
                        <nav class="navbar navbar-light bg-light">
                            <a class="navbar-brand">
                                <div class="dropdown">
                                    <button class="btn btn-sm dropdown-toggle bg-white border" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        10
                                    </button>
                                    <span> records per page</span>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button">10</button>
                                        <button class="dropdown-item" type="button">20</button>
                                        <button class="dropdown-item" type="button">50</button>
                                    </div>
                                </div>
                            </a>

                            <form class="form-inline">
                                <span>Search :</span> <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
                            </form>
                        </nav>
                    </div>

                    <!-- Corps du tableau  -->
                    <div class="corps bg-light">
                        <table class="table table-striped border">
                            <tbody>
                                <tr>
                                    <th scope="col">Code Produit</th>
                                    <th scope="col">Désignation</th>
                                    <th scope="col">Catégorie</th>
                                    <th scope="col">Quantité</th>
                                    <th scope="col">Prix d'achat</th>
                                    <th scope="col">Date expiré</th>
                                    <th scope="col">Modifier / Supprimer</th>
                                </tr>
                                <tr>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td><i class="far fa-edit fa-2x"></i> <i class="fas fa-times fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td><i class="far fa-edit fa-2x"></i> <i class="fas fa-times fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td><i class="far fa-edit fa-2x"></i> <i class="fas fa-times fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td><i class="far fa-edit fa-2x"></i> <i class="fas fa-times fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td><i class="far fa-edit fa-2x"></i> <i class="fas fa-times fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td><i class="far fa-edit fa-2x"></i> <i class="fas fa-times fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td><i class="far fa-edit fa-2x"></i> <i class="fas fa-times fa-2x"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pied du tableau -->
                    <div class="pied bg-light">
                        <div class="row">
                            <div class="col">
                                Showing 1 to 8 of 8 entries
                            </div>
                            <div class="col"></div>
                            <div class="col">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item border-0 bg-light"><i class="fas fa-long-arrow-alt-left"></i> Previous</li>
                                        <li class="page-item border-0 bg-light page1">1</li>
                                        <li class="page-item border-0 bg-light">Next <i class="fas fa-long-arrow-alt-right"></i></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>