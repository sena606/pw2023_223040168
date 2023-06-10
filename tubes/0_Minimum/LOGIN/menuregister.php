<?php
require '../function.php';

if (isset($_POST["register"])) {
    if (register($_POST) > 0) {
        echo "<script>
    alert('New User added')
    document.location.href = '../index.php';
     </script>";
    } else {
        echo mysqli_error($fsr);
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Fashion Era || Register</title>
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
            <form class="p-3 mt-3" method="post">
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="text" name="userName" id="userName" placeholder="Username" autocomplete='off'>
                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="password" name="password" id="pwd" placeholder="Password">
                </div>

                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="email" name="email" id="eml" placeholder="Email" autocomplete='off'>
                </div>
                <button class="btn mt-3" name="register">register</button>
            </form>
            <div class="text-center fs-6">
            </div>
        </div>
    </form>
</body>

</html>