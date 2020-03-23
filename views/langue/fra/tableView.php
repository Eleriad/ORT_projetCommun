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