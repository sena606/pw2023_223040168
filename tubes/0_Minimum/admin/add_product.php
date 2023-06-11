<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../LOGIN/menulogin.php");
    exit;
}

require '../function.php';

$product = query("SELECT * FROM product NATURAL JOIN category");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || News</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/dashadmin.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Fashion Era</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="add_product.php">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="setting.php?id=<?= $_SESSION['id']; ?>">Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../LOGIN/logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        <h1>News</h1>
        <!-- Place your dashboard content here -->
        <a href="add_news.php" class="btn btn-primary">Add News</a>

        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Title</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Category</th>
                    <th scope="col">Option</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($product as $pr) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td>
                            <img src="../assets/img/<?= $pr['photo']; ?>" width="50">
                        </td>
                        <td><?= $pr['title']; ?></td>
                        <td><?= $pr['detail']; ?></td>
                        <td><?= $pr['nama_category']; ?></td>
                        <td>
                            <a href="ubah.php?id=<?= $pr['id']; ?> " class="badge bg-success text-white">ubah</a> |
                            <a href="hapus.php?id=<?= $pr['id']; ?> " class="badge bg-danger text-white">hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </main>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>