<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>ajout produit</title>
</head>
<body>

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <h1 class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none fs-4 ms-2 ">Ajouter un produit</h1>
        <ul class="nav nav-pills me-2">
            <li><a class="nav-link active" href="index.php">Produit</a></li>
            <li><a class="nav-link" href="recap.php">Recap</a></li>
        </ul>
        
    </header>
    <form action="traitement.php" method="post">
        <p>
            <label class="input-group-text w-25 ms-2">
                Nom du produit :
                <input class="form-control ms-4" type="text" name="name">
            </label>
        </p>
        <p>
            <label class="input-group-text w-25 ms-2">
                Prix du produit :
                <input class="form-control ms-4" type="number" step="any" name="price">
            </label>
        </p>
        <p>
            <label class="input-group-text w-25 ms-2">
                Quantité désirée :
                <input class="form-control ms-4" type="number" name="qtt" value="1">
            </label>
        </p>
        <p>
            <input class="btn btn-primary ms-2 w-25" type="submit" name="submit" value="Ajouter le produit">
        </p>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>