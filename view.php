<?php
include "config.php";






$query = "SELECT * FROM prodotto";
$result = $conn->query($query); 
$prodotti = $result ? $result->fetch_all(MYSQLI_ASSOC) : [];


$conn->close(); 




?>




<!DOCTYPE html>
<html lang="it">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo prodotti</title>
</head>


<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Descrizione</th>
            <th>Prezzo</th>
        </tr>
        <?php foreach ($prodotti as $p): ?>
            <tr>
                 <td><?=$p['id'] ?></td>
                <td><?= $p['descrizione'] ?></td>
                <td><?= $p['prezzo']?>€</td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>


</html>