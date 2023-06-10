<?php
session_start();
require '../function.php';
if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($fsr, "SELECT * FROM users WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;
            $_SESSION["role"] = $row['role'];
            $_SESSION['username'] = $row['username'];

            if ($_SESSION['role'] == 'admin') {
                header("Location: ../admin/dashboard.php");
                exit;
            }
            if ($_SESSION['role'] == 'user') {
                header("Location: ../index.php");
                exit;
            }
        }
    }

    $error = true;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Fashion Era || Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <style>
    body {
        background-image: radial-gradient(circle, #c1d690, #9fae7b, #7e8866, #5f6452, #41423e);
        backdrop-filter: blur(10px);
    }
    </style>
</head>

<body>
    <form action="" method="post">
        <div class="wrapper">
            <div class="logo">
                <img src="../assets/img/image2.jpg" alt="">
            </div>
            <div class="text-center mt-4 name">

            </div>
            <form class="p-3 mt-3">

                <?php if (isset($error)) : ?>
                <p style="color: red; font-style: italic;">Wrong Username or Password</p>
                <?php endif; ?>

                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="text" name="username" id="username" placeholder="Username" autocomplete='off'>
                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="password" name="password" id="pwd" placeholder="Password">
                </div>
                <button class="btn mt-3" name="login">LOGIN</button>
            </form>
            <div class="text-center fs-6">
                <br>
                <a href="menuregister.php">SIGNUP</a>
            </div>
        </div>
    </form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>