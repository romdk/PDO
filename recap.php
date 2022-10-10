<?php
    session_start(); 
    include "fonctions.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Récapitulatif des produits</title>
</head>
<body>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <h1 class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none fs-4 ms-2 ">Récapitulatif des produits</h1>
        <ul class="nav nav-pills me-2">
            <li><a class="nav-link" href="index.php">Produit</a></li>
            <li><a class="nav-link active" href="recap.php">Recap</a></li>
            <li class="nav-link active ms-4"><svg class= "me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
</svg><?php if(isset($_SESSION['products'])){ echo affQtt();} else{echo "panier vide";}?></li>
        </ul>
        
    </header>
    <?php 
        if(!isset($_SESSION['products']) || empty($_SESSION['products'])) {
            echo "<p>Aucun produit en session...</P>";
        }
        else{
            echo "<table class='table table-dark table-striped w-50 ms-4'>",
                    "<thead>",
                        "<tr>",
                            "<th>#</th>",
                            "<th>Nom</th>",
                            "<th>Prix</th>",
                            "<th>Quantité</th>",
                            "<th>Total</th>",
                            "<th></th>",
                        "</tr>",
                    "</thead>",
                    "<tbody>";
                        $totalGeneral = 0;
                        foreach($_SESSION['products'] as $index => $product){
                            $total = $product['price']*$product['qtt'];
                            echo "<tr>",
                                    "<td>".$index."</td>",
                                    "<td>".$product['name']."</td>",
                                    "<td>".number_format($product['price'],2,",","&nbsp;")."&nbsp;€</td>",
                                    "<td><a class='btn btn-secondary btn-sm mx-2' href='traitement.php?action=downQtt&id=$index'>-</a>"
                                    .$product['qtt']."
                                    <a class='btn btn-secondary btn-sm mx-2' href='traitement.php?action=upQtt&id=$index'>+</a></td>",
                                    "<td>".number_format($total,2,",","&nbsp;")."&nbsp;€</td>",  
                                    "<td><a class='btn btn-secondary' href='traitement.php?action=supprimerProduit&id=$index'>supprimer</a></td>
                                    </tr>";
                            $totalGeneral += $total;
                        }
                        echo "<tr>",
                                "<td colspan=4>Total général : </td>",
                                "<td><strong>".number_format($totalGeneral, 2, ",",  "&nbsp;")."&nbsp;€</strong></td>",
                                "<td> <a class='btn btn-secondary' href='traitement.php?action=viderPanier'>Vider panier</a></td>";                                
                            "</tr>";            
                    "</tbody>";
                    "</table>";
        }
    
    ?>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
</body>
</html>