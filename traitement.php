<?php
    session_start();
    include "fonctions.php";

    $action = $_GET["action"];
    $id = $_GET["id"];

    switch($action) {

        case "ajouterProduit";

        if(isset($_POST['submit'])){

            $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
            $price = filter_input(INPUT_POST,"price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $qtt = filter_input(INPUT_POST, "qtt", FILTER_VALIDATE_INT);

            if($name && $price && $qtt){

                $product = [
                    "name" => $name,
                    "price" => $price,
                    "qtt" => $qtt,
                    "total" => $price*$qtt
                ];

                $_SESSION['products'][] = $product;
            }
            affMsgAjout();
            header("Location:index.php");
        }
        break;

        case "viderPanier";
        unset($_SESSION['products']);
        affMsgViderPanier();
        header("Location:recap.php");
        break;

        case "supprimerProduit";
        unset($_SESSION['products'][$id]);
        affMsgProduitSupp();
        header("Location:recap.php");
        break;

        case "upQtt";
        $_SESSION['products'][$id]['qtt']++  ;
        header("Location:recap.php");
        break;

        case "downQtt";
        $_SESSION['products'][$id]['qtt']--;
        if($_SESSION['products'][$id]['qtt']==0){
            unset($_SESSION['products'][$id]);
        }
        header("Location:recap.php");
        break;
    }
?>