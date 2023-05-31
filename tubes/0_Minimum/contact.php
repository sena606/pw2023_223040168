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
                        <a class="nav-link page-scroll" href="product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll active" href="contact.php">Contact</a>
                    </li>
                </ul>
                <a href="#" class="btn btn-success me-2">Login</a>
                <a href="#" class="btn btn-primary">Register</a>
            </div>
        </div>
    </nav>
    <!-- nav end -->

    <!-- contact -->
    <div id="contact">
        <div class="container" style="margin-top: 100px">
            <div class="row justify-content-center">
                <h1 class="text-center text-uppercase">Contact</h1>
                <div class="col-lg-6">
                    <form action="" method="post">
                        <label for="name">Name : <span class="text-danger">*</span></label><br />
                        <input type="text" name="name" id="name" style="width: 100%; margin-top: 10px" required
                            placeholder="Please input your Name!" />
                        <label for="email" style="margin-top: 10px">Email : <span
                                class="text-danger">*</span></label><br />
                        <input type="text" name="email" id="email" style="width: 100%; margin-top: 10px" required
                            placeholder="Please input your Email!" />
                        <label for="message" style="margin-top: 10px">Message : <span
                                class="text-danger">*</span></label>
                        <textarea type="text" name="message" id="message"
                            style="width: 100%; height: 200px; margin-top: 10px" required
                            placeholder="Please input your Message!"></textarea>
                        <button id="kirim" class="btn btn-warning">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact end -->
</body>

</html>