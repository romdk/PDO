<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php


    function affQtt(){
        $qtt = 0;
        foreach($_SESSION['products'] as $index => $product){
            $qtt += $product['qtt'];
        }
        return $qtt;
    }

    function affMsgAjout($name){
        $id = $_GET["id"];
        unset($_SESSION['message']);
       $_SESSION['message'] = "<div class='alert alert-primary' role='alert'>".$name." a été ajouté au panier</div>";
       return $_SESSION['message'];
    };
    function affMsgCreer($name){
        $id = $_GET["id"];
        unset($_SESSION['message']);
       $_SESSION['message'] = "<div class='alert alert-primary' role='alert'>Le produit ".$name." a été créer</div>";
       return $_SESSION['message'];
    };

    function affMsgViderPanier(){
        unset($_SESSION['message']);
       $_SESSION['message'] = "<div class='alert alert-warning' role='alert'>Le panier a été supprimé</div>";
       return $_SESSION['message'];
    };

    function affMsgProduitSupp(){
        $id = $_GET["id"];
        unset($_SESSION['message']);
       $_SESSION['message'] = "<div class='alert alert-warning' role='alert'>Le produit ".$_SESSION['products'][$id]['name']." a été retiré du panier</div>";
       return $_SESSION['message'];
    };
    function affMsgQttUp(){
        unset($_SESSION['message']);
       $_SESSION['message'] = "<div class='alert alert-success' role='alert'>Ajout quantité</div>";
       return $_SESSION['message'];
    };

    function affMsgQttDown(){
        unset($_SESSION['message']);
       $_SESSION['message'] = "<div class='alert alert-success' role='alert'>Retrait quantité</div>";
       return $_SESSION['message'];
    };

    function affMsgErrPrix(){
        unset($_SESSION['message']);
       $_SESSION['message'] = "<div class='alert alert-danger' role='alert'>Erreur! le prix doit être supérieur à 0</div>";
       return $_SESSION['message'];
    };

    function affMsgErrProduit(){
        unset($_SESSION['message']);
       $_SESSION['message'] = "<div class='alert alert-danger' role='alert'>Erreur! Nom du produit incorrect</div>";
       return $_SESSION['message'];
    };
?>