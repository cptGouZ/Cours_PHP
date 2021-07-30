<?php
    spl_autoload_register('classLoader');
    function classLoader($className){
        include $className.'.php';
    }
    $dsn = 'mysql:host=localhost:3306;dbname=tp';
    $options = [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
    $pdo = new PDO($dsn, 'root','', $options);

    //Ajout d'une voiture
    if(isset($_POST['identifiant']) and isset($_POST['marque']) and
        isset($_POST['modele']) and isset($_POST['carburant']) and
        $_POST['identifiant'] !== '' and $_POST['marque'] !== '' and
        $_POST['modele'] !== '' and $_POST['carburant'] !== ''
    ){
        $query=$pdo->prepare("INSERT INTO modeles VALUES (:identifiant, :marque, :modele, :carburant)");
        $query->bindValue(':identifiant', filter_input(INPUT_POST, 'identifiant', FILTER_SANITIZE_STRING));
        $query->bindValue(':marque', filter_input(INPUT_POST, 'marque', FILTER_SANITIZE_STRING));
        $query->bindValue(':modele', filter_input(INPUT_POST, 'modele', FILTER_SANITIZE_STRING));
        $query->bindValue(':carburant', filter_input(INPUT_POST, 'carburant', FILTER_SANITIZE_STRING));
        $query->execute();
    }

    //Affichage tu tableau en haut de page
    $query = $pdo->query("SELECT * FROM modeles");
    $resultat = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, tr, td {
            border : solid thin;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Identifiant</th>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Carburant</th>
        </tr>
            <?php
                foreach($resultat as $model){
                    echo "<tr>";
                    foreach ($model as $field){
                        echo "<td>{$field}</td>";
                    }
                    echo"</tr>";
                }
            ?>
    </table>

    <form action="AppAutoLoad.php" method="post">
        <fieldset>
            <legend>Ajouter un véhicule</legend>
            <label for="idIdentifiant">Identifiant : *</label>
            <input type="text" required name="identifiant" id="idIdentifiant"><br>
            <label for="idMarque">Marque : *</label>
            <input type="text" required name="marque" id="idMarque"><br>
            <label for="idModele">Modele : *</label>
            <input type="text" required name="modele" id="idModele"><br>

            <input type="radio" id="idEssence" name="carburant" value="essence" checked>Essence<br>
            <input type="radio" id="idGasoil" name="carburant" value="gasoil" checked>Gasoil<br>
            <input type="radio" id="idGpl" name="carburant" value="gpl" checked>Gpl<br>
            <input type="radio" id="idElectrique" name="carburant" value="electrique">Electrique<br>

            <input type="submit" value="Valider">
        </fieldset>
    </form>

    <?php if (!isset($_POST['isConnected'])){ ?>
        <form action="AppAutoLoad.php" method="post">
            <fieldset>
                <legend>Connexion</legend>
                <label for="idIdUser">Identifiant utilisateur : *</label>
                <input type="number" id="idIdUser" name="idUser" required/><br>
                <label for="idPassword">Mot de passe : *</label>
                <input type="text" id="idPassword" name="password" required/><br>
                <input type="submit" value="Connexion">
            </fieldset>
        </form>
    <?php }else{ ?>
        <form action="AppAutoLoad.php" method="post">
            <fieldset>
                <legend>Modification profil</legend>
                <label for="idNom">Nom : *</label>
                <input type="text" id="idNom" name="nom" required/><br>
                <label for="idPrenom">Prenom : *</label>
                <input type="text" id="idPrenom" name="prenom" required/><br>
                <label for="idAdresse">Adresse : *</label>
                <input type="text" id="idAdresse" name="adresse" required/><br>
                <label for="idCp">Code postal : *</label>
                <input type="number" id="idCp" name="cp" required/><br>
                <label for="idVille">Adresse : *</label>
                <input type="text" id="idVille" name="ville" required/><br>
                <input type="submit" value="Modifier">
            </fieldset>
        </form>
    <?php } ?>
</body>
</html>