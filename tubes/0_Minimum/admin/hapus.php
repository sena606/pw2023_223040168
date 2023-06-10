<?php require '../function.php';
$id = $_GET['id'];

if (delete($id) > 0) {
    echo " 
    <script>
    alert('Delete Success');
    document.location.href='add_product.php';
    </script>
    ";
} else {
    echo " 
    <script>
    alert('Delete Failed');
    document.location.href='add_product.php';
    </script>
    ";
}