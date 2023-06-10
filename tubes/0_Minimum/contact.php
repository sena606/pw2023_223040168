<?php

session_start();

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

    <title>Fashion Era || Contact</title>
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
                        <a class="nav-link page-scroll" href="product.php">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll active" href="contact.php">Contact</a>
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

    <!-- contact -->
    <div id="contact">
        <div class="container" style="margin-top: 100px">
            <div class="row justify-content-center">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2>About Us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris condimentum nisi a massa
                                viverra, sed fermentum ex posuere. Integer congue sollicitudin rutrum. Suspendisse
                                potenti.</p>
                            <p>Follow us on social media:</p>
                            <div class="social-media">
                                <ul class="list-inline m-1">
                                    <li class="list-inline-item"><a href="https://www.facebook.com"><i
                                                class="bi bi-facebook">Facebook</i></a></li>
                                    <li class="list-inline-item"><a href="https://twitter.com"><i
                                                class="bi bi-twitter">Twitter</i></a></li>
                                    <li class="list-inline-item"><a href="https://instagram.com"><i
                                                class="bi bi-instagram">Instagram</i></a></li>
                                    <a href="https://api.whatsapp.com"><i class="bi bi-whatsapp">Whatsapp</i></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact end -->
</body>

</html>