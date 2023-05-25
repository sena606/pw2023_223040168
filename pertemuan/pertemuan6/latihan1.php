<?php
$hewan   = ['🐶' , '🐷' , '🐮' , '🦝' , '🐭']; 
$makan   = ['🍕' , '🍟' , '🌭' , '🍿' , '🍙'];
$maha    = ['Asep' , 'Cecep' , 'Agus' , 'Adit', 'Agung']
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <?php for ($i=0; $i <8; $i++) { ?>
    <ul>
        <li>Nama : Asep</li>
        <li>Makanan Favorit : 🍿</li>
        <li>Peliharaan : 🐺</li>
    </ul>
    <?php } ?>



</body>

</html>