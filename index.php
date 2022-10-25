<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
include 'db-functions.php';
connection();
findAll($pdo);

foreach($products as $product){
    ?><p><?php echo "<a href=''>".$product['name']."</a><br><br>".$product['description']."<br><br>".$product['price']."<br><br><a href=''>Ajouter au painer</a><br><br>"; ?></p><?php
}      


?>