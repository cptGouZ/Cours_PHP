<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <script src="reponse2.js"></script>
    </head>
    <body>
        <form action="index.php?bouton=adresse" id="form1" method="POST">
            <fieldset>
                <legend>Adresse Client</legend>
                <label for="idNom">Nom :</label>
                    <input type="text" placeholder="votre nom..." name="client[nom]" id="idNom" required/><br>
                <label for="idPrenom">Prénom :</label>
                    <input type="text" placeholder="votre prenom..." name="client[prenom]" id="idPrenom" required/><br>
                <label for="idAdresse">Adresse :</label>
                    <input type="text" placeholder="votre numéro et nom de voie" name="client[adresse]" id="idAdresse" required/><br>
                <label for="idCp">CP :</label>
                    <input type="text" placeholder="votre code postal" name="client[cp]" id="idCp" required/><br>
                <label for="idVille">Ville :</label>
                    <input type="text" placeholder="votre ville" name="client[ville]" id="idVille" required/><br>
                <input type="submit" id="submitClient" value="Envoyer le formulaire">
            </fieldset>
        </form>
        <?php include_once "reponse1.php" ?>
        <br>


        <form action="index.php?bouton=abonnement" method="POST">
            <fieldset>
                <legend>S'abonner</legend>
                <label for="idEmail">E-Mail :</label>
                    <input type="email" placeholder="votre e-mail..." name="email" id="idEmail"/><br>
                    <input type="hidden" name="navigateur" value="<?=$_SERVER['HTTP_USER_AGENT']?>"/>
                <input type="submit" value="Valider">
            </fieldset>
        </form>
        <?php include_once "reponse3.php" ?>
        <br>


        <form action="index.php?bouton=calcul" method="POST">
            <fieldset>
                <legend>Calcul TVA</legend>
                <label for="idPrixHt">Prix HT :</label>
                    <input type="number" placeholder="prix HT" name="prixHt" id="idPrixHt"/><br>
                <label for="idTva">Tva :</label>
                    <input type="number" placeholder="taux de TVA" name="tauxTva" id="idTva"/><br>
                <input type="submit" value="Calculer">
            </fieldset>
        </form>
        <?php include_once "reponse4.php" ?>
        <br>


        <form action="reponse5.php" method="post">
            <fieldset>
            <legend>Agence immo</legend>
                <input type="submit" name="agence" value="acheter">Acheter</button>
                <input type="submit" name="agence" value="vendre">Acheter</button>
                <input type="submit" name="agence" value="louer">Acheter</button>
            </fieldset>
        </form>
    </body>
</html>