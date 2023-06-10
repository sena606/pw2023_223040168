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
            alert('Edit Success');
            document.location.href='../index.php';
        </script>";
    } else {
        echo "<script>
            alert('Edit Failed');
            document.location.href='ubahuser.php?id=" . $id . "';
        </script>";
    }
}

$users = query("SELECT * FROM users WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <title>Setting || Users</title>
    <link rel="stylesheet" href="../assets/css/ns.css">
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
    <main class="container mt-4 text-center">
        <h1 style="text-shadow: 0 0 5px black;">Manage Your Account</h1>
        <form action="" method="post">
            <input class="input" name="id" type="hidden" autocomplete='off' value="<?= $users['id']; ?>">
            <input class="input" name="passwordLama" type="hidden" autocomplete='off' value="<?= $users['password']; ?>">
            <div class=" form-group">
                <br>
                <label for="passwordLama2" style="text-shadow: 0 0 5px black;">Password Lama:</label>
                <input placeholder="Insert here" class="input" name="passwordLama2" type="password">
            </div>
            <div class=" form-group">
                <br>
                <label for="password" style="text-shadow: 0 0 5px black;">Password Baru:</label>
                <input placeholder="Insert here" class="input" name="password" type="password">
            </div>
            <div class="form-group">
                <br>
                <label for="password2" style="text-shadow: 0 0 5px black;">Konfirmasi Password Baru:</label>
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