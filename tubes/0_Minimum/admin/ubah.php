<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../LOGIN/menulogin.php");
    exit;
}

require '../function.php';

$id = $_GET['id'];

$edit = query("SELECT * FROM product WHERE id = $id")[0];

if (isset($_POST['submit'])) {
    if (edit($_POST) > 0) {
        echo " 
    <script>
    alert('Edit Success');
    document.location.href='add_product.php';
    </script>
    ";
    } else {
        echo " 
    <script>
    alert('Edit Failed');
    document.location.href='add_product.php';
    </script>
    ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>ubah</title>
</head>

<body>
    <div class="container mt-3">
        <h1>Edit News</h1>

        <div class="row">
            <div class="col-md-8">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $edit['id']; ?> ">
                    <input type="hidden" name="gambarlama" value="<?= $edit['photo']; ?>">
                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo</label>
                        <img src="../assets/img/<?= $edit['photo']; ?>" width="10%" alt="">
                        <input type="file" class="form-control" name="photo" id="photo">
                    </div>
                    <div class=" mb-3">
                        <label for="detail" class="form-label">Detail</label>
                        <input type="text" class="form-control" name="detail" id="detail"
                            value="<?= $edit['detail']; ?>">
                    </div>
                    <div class=" mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="<?= $edit['title']; ?>">
                    </div>
                    <button class=" btn btn-primary" type="submit" name="submit">Edit News</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>