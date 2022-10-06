<?php
    session_start();
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
                        "</tr>",
                    "</thead>",
                    "<tbody>";
                        $totalGeneral = 0;
                        foreach($_SESSION['products'] as $index => $product){
                            echo "<tr>",
                                    "<td>".$index."</td>",
                                    "<td>".$product['name']."</td>",
                                    "<td>".number_format($product['price'],2,",","&nbsp;")."&nbsp;€</td>",
                                    "<td>".$product['qtt']."</td>",
                                    "<td>".number_format($product['total'],2,",","&nbsp;")."&nbsp;€</td>",
                                "</tr>";
                            $totalGeneral += $product['total'];
                        }
                        echo "<tr>",
                                "<td colspan=4>Total général : </td>",
                                "<td><strong>".number_format($totalGeneral, 2, ",",  "&nbsp;")."&nbsp;€</strong></td>",
                            "</tr>",            
                    "</tbody>",
                "</table>";
        }
    
    ?>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
</body>
</html>