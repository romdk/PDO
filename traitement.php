<?php
    session_start();

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



    }
    // fonction supprimer produit
    if(isset($_POST['deleteProduct']) and is_numeric($_POST['deleteProduct']))
    {
        $delete = $_POST['deleteProduct'];
        $_SESSION = "DELETE FROM product where id = $delete";
    }


    // fonction supprimer tout
    $destroySessionFlag = filter_input(INPUT_POST, 'destroySession');
    if ($destroySessionFlag == 1) {
        session_destroy();
    }

    // fonction augmenter/diminuer quantité
    if (isset($_POST['increase'])){
        $_SESSION['qtt']++;
     }elseif (isset($_POST['decrease'])){
        $_SESSION['qtt']--;
     }

    header("Location:index.php");
?>