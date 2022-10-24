<?php

    function connection(){
        $pdo = new PDO(
            'mysql:host=127.0.0.1;dbname=store;charset=utf8',
            'root',
            '',
            [\PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            ]
        );
    }
    
    function findAll(){
        connection();
        $sqlQuery = $pdo->prepare('SELECT * FROM products');                
        $sqlQuery->execute();
        $products = $sqlQuery->fetchAll(); 
        
        foreach($products as $product){
                ?><p><?php return $product['name']." ".$product['description']." ".$product['price']; ?></p><?php
        }

    }
    echo findAll();


    function findOneById($id){
        connection();
        $sqlQuery = $pdo->prepare('SELECT * FROM products WHERE id = $id');
        $sqlQuery->execute();
        $products = $sqlQuery->fetchAll();

   foreach($products as $product){
        ?><p><?php return $product['name']." ".$product['description']." ".$product['price']; ?></p><?php
}
    }

    echo findOneById(2);
?>