<?php
require '../function.php';
if (isset($_POST['tambah'])) {
    //cel jika data berhasil ditambah
    if (add($_POST) > 0) {
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'add_product.php';
        </script>";
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
    <title>Document</title>
</head>

<body>
    <div class="container mt-3">
        <h1>Add News</h1>

        <div class="row">
            <div class="col-md-8">
                <form action="" method="post" enctype='multipart/form-data'>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Photo</label>
                        <input type="file" class="form-control" name="photo" id="photo">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Detail</label>
                        <input type="text" class="form-control" name="detail" id="detail">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <button class="btn btn-primary" type="submit" name="tambah">Add Data</button>
                </form>
            </div>
        </div>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>

</html>