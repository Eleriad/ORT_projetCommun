<div class="col">
    <section class="flex-grow-1 text-center bg-light ml-2 text-white">
        <!-- formualire de connexion -->
        <form class="form-signin border border-radius bg-dark rounded" method="POST" action="./index.php">
            <!-- titre -->
            <h1 class="h3 mb-3 font-weight-normal">Merci de vous identifier</h1>
            <!-- 1er champ : email -->
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
            <!-- 2e champ : mot de passe -->
            <label for="inputPassword" class="sr-only">Mot de passe</label>
            <input type="password" name="motDePasse" id="inputPassword" class="form-control mt-1" placeholder="Mot de passe" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" name="remember" value="remember-me"> Se souvenir de moi
                </label>
            </div>
            <?php
            if ($ifUser == true && (empty($_SESSION["idUser"]) || !isset($_SESSION["idUser"]))) { ?>
                <div class="alert alert-danger">
                    Identifiants incorrects
                </div>
            <?php
            }
            ?>
            <!-- Bouton de connexion / soumission de formulaire -->
            <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
        </form>
    </section>
</div>