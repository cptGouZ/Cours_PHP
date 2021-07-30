<?php
spl_autoload_register('classLoader');
function classLoader($className){
    include $className.'.php';
}
$dsn = 'mysql:host=localhost:dbname=tp';
$options = [
    PDO::ATTR_ERRMODE : PDO::ERRMODE_EXCEPTION
];
$pdo = new PDO($dsn, 'root', $options)
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Identifiant</th>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Carburant</th>
        </tr>
        <tr>
            <td></td>
        </tr>
    </table>
</body>
</html>