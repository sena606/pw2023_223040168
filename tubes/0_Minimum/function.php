<?php

define('baseurl', 'localhost/kuliah/tubes/0_Minimum/');
$fsr = mysqli_connect("localhost", "root", "", "fsera");

function query($query)
{
    global $fsr;
    $result = mysqli_query($fsr, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function add($data)
{
    global $fsr;
    $detail = htmlspecialchars($data['detail']);
    $title = htmlspecialchars($data['title']);
    $photo = upload();
    if (
        !$photo
    ) {
        return false;
    }

    $query = "INSERT INTO
            product
            VALUES
             (null , '$photo','$title','$detail')";
    mysqli_query($fsr, $query) or die(mysqli_error($fsr));

    return mysqli_affected_rows($fsr);
}

function delete($id)
{
    global $fsr;
    mysqli_query($fsr, "DELETE FROM product WHERE id = $id");
    return mysqli_affected_rows($fsr);
}
function edit($data)
{
    global $fsr;

    $id = $data['id'];
    $title = htmlspecialchars($data['title']);
    $detail = htmlspecialchars($data['detail']);
    $gambarlama = $data['gambarlama'];

    if ($_FILES['photo']['error'] === 4) {
        $photo = $gambarlama;
    } else {
        $photo = upload();
    }

    $query = "UPDATE product SET 
    photo='$photo',
    title='$title',
    detail='$detail'
    WHERE id=$id 
    ";
    mysqli_query($fsr, $query);
    return mysqli_affected_rows($fsr);
}
function upload()
{

    $namaFile = $_FILES['photo']['name'];
    $ukuranFile = $_FILES['photo']['size'];
    $error = $_FILES['photo']['error'];
    $tmpName = $_FILES['photo']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../assets/img/' . $namaFileBaru);

    return $namaFileBaru;
}

function cari($keyword)
{
    $query = "SELECT * FROM product
				WHERE
			  title LIKE '%$keyword%' OR
			  detail LIKE '%$keyword%'
			";
    return query($query);
}

function register($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $email = mysqli_real_escape_string($conn, $data["email"]);
}