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
// connection();

// ----------------AFFICHER TOUT ---------------------
function findAll($pdo){
    $sqlQuery = $pdo->prepare("SELECT * FROM products");                
    $sqlQuery->execute();
    global $products;
    $products = $sqlQuery->fetchAll(); 
    
    
}
// echo findAll($pdo);



// ----------------AFFICHER ELEMENT POSSEDANT ID SPECIFIQUE ---------------------
function findOneById($pdo,$id){
    $sqlQuery = $pdo->prepare("SELECT * FROM products WHERE id = :id");
    $sqlQuery->bindValue(":id", $id);
    $sqlQuery->execute();
    global $product;
    $product = $sqlQuery->fetch();      
}
// echo findOneById($pdo,$id=2);



// ----------------INSERER ELEMENT DANS DB ---------------------
    function insertProduct($pdo,$name,$descr,$price){
        $sqlQuery = $pdo->prepare("INSERT INTO products (name, description, price)
                                    VALUES ('$name', '$descr', '$price')");
        $sqlQuery->execute();
    }
    // insertProduct($pdo,$name="abricot",$descr="un lot de 4 abricots",$price=1.69);
?>