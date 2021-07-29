<?php
    if(isset($_GET['bouton'])
        && $_GET['bouton']==='abonnement'){
        echo "Votre e-mail est {$_POST['email']}".'<br>';
        echo "Le navigateur est {$_POST['navigateur']}".'<br>';
    }
?>