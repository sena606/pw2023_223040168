<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../LOGIN/menulogin.php");
    exit;
}

require '../function.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $passwordBaru = $_POST['password'];

    if (gantiPassword($fsr, $username, $passwordBaru)) {
        echo "<script>
            alert('Edit Success');
            document.location.href='setting.php';
        </script>";
    } else {
        echo "<script>
            alert('Edit Failed');
            document.location.href='setting.php';
        </script>";
    }
}

mysqli_close($fsr);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting || Users</title>
</head>

<body>

</body>

</html>