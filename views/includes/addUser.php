<section id="addUser" class="mx-auto border rounded shadow mt-5 mb-5 p-4">
    <form method="post" class="form-signin" action="connexion.php">
        <div class="centrer mb-3 mt-1">
            <img src="/component/img/logoBlack2.png" width="50%" class="center "></div>
        <h4 class="text-center mb-3">Information utilisateur :</h4>
        <div>
            <div class="form-group row">
                <label for="name" class="col-12 col-sm12 col-md-4 col-form-label">Nom : </label>
                <div class="col-12 col-sm12 col-md-8">
                    <input type="text" class="form-control" id="name" placeholder="Votre nom">
                </div>
            </div>
            <div class="form-group row">
                <label for="firstname" class="col-12 col-sm12 col-md-4 col-form-label">Prenom : </label>
                <div class="col-12 col-sm12 col-md-8">
                    <input type="text" class="form-control" id="firstname" placeholder="Votre prenom">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-12 col-sm12 col-md-4 col-form-label">Email : </label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="email" placeholder="email@exemple.com">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-12 col-sm12 col-md-4 col-form-label">Mot de passe : </label>
                <div class="col-12 col-sm12 col-md-8">
                    <input type="password" class="form-control" id="password" placeholder="Promis c'est pas stocker en clair">
                </div>
            </div>
            <div class="form-group row">
                <label for="type" class="col-12 col-sm12 col-md-4 col-form-label">Type : </label>
                <select id="inputState" class="form-control col-12 col-sm12 col-md-7 ml-3">
                    <option selected>admin</option>
                    <option>guest</option>
                    <option>client</option>
                </select>
            </div>
            <div class="text-center">
                <button type="submit" value="valider" name="valider" class="btn btn-primary">Envoyer</button>
                <button type="submit" value="valider" name="cancel" class="btn btn-danger">Annuler</button>
            </div>
            <!--<font style="vertical-align: inherit;"><font style="vertical-align: inherit;">© OlgaMRSK 2020 </font></font>-->

        </div>
    </form>
</section>