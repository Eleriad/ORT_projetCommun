<div class="col">
    <section class="flex-grow-1 text-center bg-light ml-2 text-white">
        <form class="form-signin border border-radius bg-dark rounded" method="POST" action="/index.php">
            <h1 class="h3 mb-3 font-weight-normal">Merci de vous identifier</h1>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
            <label for="inputPassword" class="sr-only">Mot de passe</label>
            <input type="password" pattern=".{8,20}" name="inputPassword" id="inputPassword" class="form-control mt-1" placeholder="Mot de passe" required>
            <small id="passwordHelpBlock" class="form-text text-muted mb-1">
                Votre mot de passe doit contenir entre 8 et 20 caractères, incluent des lettres, des nombres et des caractères spéciaux.
            </small>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" name="remember" value="remember-me"> Se souvenir de moi
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
        </form>
    </section>
</div>