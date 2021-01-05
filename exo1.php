<?php
    include 'utils.inc.php';
    start_page('Inscription');
?>

<form action="data-processing.php" method="post">

    <div>
        <label for="id">Identifiant:</label>
        <input id="id" name="id" type="text"/>
    </div>

    <div>
        <label>Civilité:</label>
        <div>
            <input name="civ" id="male" type="radio"/>
            <label for="male">Homme</label>
        </div>
        <div>
            <input name="civ" id="female" type="radio"/>
            <label for="female">Femme</label>
        </div>
    </div>

    <div>
        <label for="mail">Adresse e-mail:</label>
        <input id="mail" name="mail" type="text"/>
    </div>

    <div>
        <label for="pswd">Mot de passe:</label>
        <input id="pswd" name="pswd" type="password"/>
    </div>

    <div>
        <label for="verif_pswd">Confirmer mot de passe:</label>
        <input id="verif_pswd" name="verif_pswd" type="password"/>
    </div>

    <div>
        <label for="tel">Numéro de téléphone:</label>
        <input id="tel" name="tel" type="text"/>
    </div>

    <div>
        <label for="pays">Pays:</label>
        <select name="pays" id="pays">
            <option value="">--Choisir un Pays--</option>
            <option value="fr">France</option>
            <option value="other">Pas France</option>
        </select>
    </div>

    <div>
        <label for="cond">J'accepte les conditions générales:</label>
        <input id="cond" name="cond" type="checkbox"/>
    </div>

    <div>
        <input type="submit" value="mailer" name="action"/>
    </div>

</form>

<?php
    end_page();
?>