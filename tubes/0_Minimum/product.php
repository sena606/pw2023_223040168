<?php
session_start();
require "function.php";
$repeat = query("SELECT * FROM product");

if (isset($_POST["button-search"])) {
    $repeat = cari($_POST["keyword"]);
}

// strip tags to avoid breaking any html
// $string = strip_tags($data);
// if (strlen($string) > 100) {

//     // truncate string
//     $stringCut = substr($string, 0, 100);
//     $endPoint = strrpos($stringCut, ' ');

//     //if the string doesn't contain any space then it will cut without word basis.
//     $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
//     $string .= '... <a href="/this/story">Read More</a>';
// }
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet" />

    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/product.css" />

    <title>Fashion Era || News</title>
</head>

<body>
    <!-- nav -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Fashion Era</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll active" href="product.php">News</a>
                    </li>
                </ul>
                <?php if (isset($_SESSION['login'])) : ?>
                <a href="LOGIN/logout.php" class="btn btn-light me-2">Logout</a>
                <a href="LOGIN/ubahuser.php?id=<?= $_SESSION['id']; ?>" class="btn btn-outline-dark me-2"><i
                        class="bi bi-gear"></i></a>
                <?php else : ?>
                <a href="LOGIN/menulogin.php" class="btn btn-light me-2">Login</a>
                <a href="LOGIN/menuregister.php" class="btn btn-light">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <!-- nav end -->

    <!-- Product -->
    <div id="product" style="margin-top: 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="" method="post">
                        <div class="input-group my-3 text-center">
                            <input type="search" class="form-control" placeholder="Search News" name="keyword"
                                id="keyword" autofocus autocomplete="off">
                            <button class=" btn btn-primary" type="submit" name="button-search"
                                id="button-search">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div id="container">
                <div class="row ms-auto me-auto">
                    <?php if ($repeat) : ?>
                    <?php foreach ($repeat as $br) : ?>
                    <div class="col-lg-4">
                        <div class="card my-2 mb-4" style="max-width: 18rem;">
                            <img src=" assets/img/<?= $br['photo']; ?>" class="card-img-top" alt="baju"
                                height="200px" />
                            <div class="card-body">
                                <h5 class="card-title"><?= $br['title']; ?></h5>
                                <p class="card-text">
                                    <?= substr_replace($br['detail'], "<a href='#'></a>", 30); ?>
                                </p>
                                <a href="see_news.php?id=<?= $br['id']; ?>" class="btn btn-secondary">See More</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php else : ?>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="alert alert-danger text-center" role="alert">
                                Not Found
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- Product end -->
        <script src="js/script.js"></script>
</body>

</html>