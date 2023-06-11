<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../LOGIN/menulogin.php");
    exit;
}

require '../function.php';
$id = $_GET['id'];

if (isset($_POST['submit'])) {
    if (gantiPassword($_POST) > 0) {
        echo "<script>
            alert('Password already change');
            document.location.href='dashboard.php?id=" . $id . "';
        </script>";
    } else {
        echo mysqli_error($fsr);
    }
}


$users = query("SELECT * FROM users WHERE id = $id")[0];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Setting</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: "Inter", sans-serif;
            height: 90vh;
            background-image: url(../assets/img/gate.png);
            background-size: cover;
            background-position: center;
            color: white;
        }

        .input {
            max-width: 190px;
            height: 30px;
            border: 2px solid transparent;
            outline: none;
            border-bottom: 2px solid #3f3f3f;
            caret-color: #3f3f3f;
            background-color: #212121;
            padding: 5px;
            transition: .5s linear;
            font-family: monospace;
            letter-spacing: 1px;
        }

        .input:focus {
            border: 2px solid #fa4753;
            caret-color: #fa4753;
            color: #fa4753;
            box-shadow: 4px 4px 10px #070707;
        }

        .input:focus::placeholder {
            color: #fa4753;
        }
    </style>
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
                            <a class="nav-link " href="add_product.php">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="setting.php?id=<?= $_SESSION['id']; ?>">Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../LOGIN/logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-4 text-center">
        <h1 style="text-shadow: 0 0 5px black;">Manage Your Account</h1>
        <form action="" method="post">
            <input class="input" name="id" type="hidden" autocomplete='off' value="<?= $id; ?>">
            <input class="input" name="passwordLama" type="hidden" autocomplete='off' value="<?= $users['password']; ?>">
            <div class=" form-group">
                <br>
                <label for="passwordLama2" style="text-shadow: 0 0 5px black;">Old Password:</label>
                <input placeholder="Insert here" class="input" name="passwordLama2" type="password">
            </div>
            <div class=" form-group">
                <br>
                <label for="password" style="text-shadow: 0 0 5px black;">New Password:</label>
                <input placeholder="Insert here" class="input" name="password" type="password">
            </div>
            <div class="form-group">
                <br>
                <label for="password2" style="text-shadow: 0 0 5px black;">Confirm New Password:</label>
                <input placeholder="Insert here" class="input" name="password2" type="password">
            </div>
            <div class="form-group">
                <br>
                <input type="submit" name="submit" value="submit" class="btn btn-primary">
            </div>
        </form>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>