<?php
if(isset($_GET['bouton'])
    && $_GET['bouton']==='adresse'){
    $filter=[
        'client'=>array(
            'nom' => FILTER_SANITIZE_STRING,
            'prenom' => FILTER_SANITIZE_STRING,
            'adresse' => FILTER_SANITIZE_STRING,
            'cpo' => FILTER_SANITIZE_NUMBER_INT,
            'ville' => FILTER_SANITIZE_STRING
        )
    ];
    filter_input_array(INPUT_POST, $filter);
    ?>
        <style>
            table, tr, th, td {
                border: solid 0.5px;
            }
        </style>
        <table>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Code Postal</th>
                <th>Ville</th>
            </tr>
            <tr>
                <td><?=$_POST['client']['nom']?></td>
                <td><?=$_POST['client']['prenom']?></td>
                <td><?=$_POST['client']['adresse']?></td>
                <td><?=$_POST['client']['cp']?></td>
                <td><?=$_POST['client']['ville']?></td>
            </tr>
        </table>
    <?php
    };
?>
