<?php
    session_start();

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
            header("Location:index.php");
        }
        break;

        case "viderPanier";
        unset($_SESSION['products']);
        header("Location:recap.php");
        break;


   

        case "supprimerProduit";
        unset($_SESSION['products']);
        header("Location:recap.php");
        break;

}
 

    // fonction supprimer tout
    // $destroySessionFlag = filter_input(INPUT_POST, 'destroySession');
    // if ($destroySessionFlag == 1)  {
    //     unset($_SESSION);
    // }

    // // fonction augmenter/diminuer quantité
    // if (isset($_POST['increase'])){
    //     $_SESSION['qtt']++;
    //  }elseif (isset($_POST['decrease'])){
    //     $_SESSION['qtt']--;
    //  }

?>