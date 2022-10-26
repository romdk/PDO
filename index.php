<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
</head>
<body>
    
</body>
</html>

<?php
include 'db-functions.php';
connection();
findAll($pdo);

foreach($products as $product){
    $id = $product['ID'];
    ?><p><?php echo "<a href=product.php?id=$id>".$product['name']."</a><br>".mb_strimwidth($product['description'], 0, 50, "...")."<br>".$product['price']."&euro;<br><a href='traitement.php'>Ajouter au panier</a><br>"; ?></p><?php
}      


?>