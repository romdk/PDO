<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
<?php
include 'db-functions.php';
echo "<a href='index.php'>Retour</a>";

$id = $_GET["id"];
connection();

findOneById($pdo,$id);

foreach($products as $product){
    $id = $product['ID'];
    ?><p><?php echo $product['name']."<br>".$product['description']."<br>".$product['price']."&euro;<br><a href='traitement.php'>Ajouter au panier</a><br>"; ?></p><?php
}          

?>
</body>
</html>