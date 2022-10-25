<?php


// ----------------CONNECTION DB---------------------
function connection(){
    global $pdo;
    $pdo = new PDO(
        'mysql:host=127.0.0.1;dbname=store;charset=utf8',
        'root',
        '',
        [\PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']
    );
}

// ----------------AFFICHER TOUT ---------------------
function findAll($pdo){
    $sqlQuery = $pdo->prepare("SELECT * FROM products");                
    $sqlQuery->execute();
    $products = $sqlQuery->fetchAll(); 
    
    foreach($products as $product){
        ?><p><?php echo $product['name']." ".$product['description']." ".$product['price']; ?></p><?php
    }    
}



// ----------------AFFICHER ELEMENT POSSEDANT ID SPECIFIQUE ---------------------
function findOneById($pdo,$id){
    $sqlQuery = $pdo->prepare("SELECT * FROM products WHERE id = $id");
    $sqlQuery->execute();
    $products = $sqlQuery->fetchAll();
    
    foreach($products as $product){
        ?><p><?php echo $product['name']." ".$product['description']." ".$product['price']; ?></p><?php
    }    
}



// ----------------INSERER ELEMENT DANS DB ---------------------
    function insertProduct($pdo,$name,$descr,$price){
        $sqlQuery = $pdo->prepare("INSERT INTO products (name, description, price)
                                    VALUES ('$name', '$descr', '$price')");
        $sqlQuery->execute();
    }
?>