<?php
require('functions.php');

$title = 'Home';
if (isset($_GET['button-search'])) {
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM 
    mahasiswa 
    WHERE 
    NAMA    LIKE'%$keyword%' OR
    JURUSAN LIKE'%$keyword%' OR
    EMAIL   LIKE'%$keyword%' 
    ";
    $students = query($query);
} else {
    $students = query("SELECT * FROM mahasiswa");
}


require('views/index.view.php');
