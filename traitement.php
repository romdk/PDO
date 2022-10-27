<?php
    session_start();
    // session_destroy();
    include "fonctions.php";
    include 'db-functions.php';
    connection();

    $action = $_GET["action"];
    $id = $_GET["id"];  
    
    switch($action) {
        
        case "ajouterPanier";
        
        findOneById($pdo,$id);
        $name = $product['name'];
        $price = $product['price'];
        $qtt = 1;
        // $id = $product['ID'];
        
        $product = [
            "name" => $name,
            "price" => $price,
            "qtt" => $qtt,
            "total" => $price*$qtt
        ];

        if(isset($_SESSION['products'])){
                foreach($_SESSION['products'] as $index => $item ){
                if($item['name'] == $name){
                    return header("Location:traitement.php?action=upQtt&id=$index");
                    affMsgQttUp();
                    die;
                }
            }

            $_SESSION['products'][] = $product ;
            header("Location:index.php");
            affMsgAjout($name);
            
        }
        else {$_SESSION['products'][] = $product ;
            header("Location:index.php");
            affMsgAjout($name);}

        break;

        case "creerProduit";

        if(isset($_POST['submit'])){
            
            $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
            $descr = filter_input(INPUT_POST, "description", FILTER_SANITIZE_SPECIAL_CHARS);
            $price = filter_input(INPUT_POST,"price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            
            insertProduct($pdo,$name,$descr,$price);
            $id = $pdo->lastInsertId();
            header("Location:product.php?id=$id");
            
            if($price == 0){
                affMsgErrPrix();
            }
            
            elseif(empty($name) == TRUE ){
                affMsgErrProduit();
            }
            else{
                affMsgCreer($name);  
            }
            
        }
        break;

        case "viderPanier";
        unset($_SESSION['products']);
        affMsgViderPanier();
        header("Location:recap.php");
        break;

        case "supprimerProduit";
        affMsgProduitSupp();
        unset($_SESSION['products'][$id]);
        header("Location:recap.php");
        break;

        case "upQtt";
        $_SESSION['products'][$id]['qtt']++  ;
        affMsgQttUp();
        header("Location:recap.php");
        break;

        case "downQtt";
        $_SESSION['products'][$id]['qtt']--;
        affMsgQttDown();
        if($_SESSION['products'][$id]['qtt']==0){
            unset($_SESSION['products'][$id]);
            affMsgProduitSupp();
        }
        header("Location:recap.php");
        break;
    }
