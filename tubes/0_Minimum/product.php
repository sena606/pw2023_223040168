<?php 
require "function.php";
$repeat = query("SELECT * FROM product");  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet" />

    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/product.css" />

    <title>Fashion Era || Product</title>
</head>

<body>
    <!-- nav -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-tertiary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Fashion Era</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll active" href="product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="contact.php">Contact</a>
                    </li>
                </ul>
                <a href="#" class="btn btn-success me-2">Login</a>
                <a href="#" class="btn btn-primary">Register</a>
            </div>
        </div>
    </nav>
    <!-- nav end -->
    <!-- Product -->
    <div id="product">
        <div class="container">
            <div class="row ms-auto me-auto">
                <?php foreach ($repeat as $br) :?>
                <div class="col-lg-4">
                    <div class="card my-2 mb-4" style="max-width: 18rem;">
                        <img src=" assets/img/<?= $br['photo']; ?>" class="card-img-top" alt="baju" height="200px" />
                        <div class="card-body">
                            <h5 class="card-title"><?= $br['title']; ?></h5>
                            <p class="card-text">
                                <?= $br['detail']; ?>
                            </p>
                            <a href="#" class="btn btn-secondary">See More</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Product end -->
</body>

</html>