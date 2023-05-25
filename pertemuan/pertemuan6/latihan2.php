<?php 
$maha = [['Asep'  , '🐶' , '🍕'] , 
        ['Ahmad'  , '🐷' , '🍟'] , 
        ['Agus '  , '🐮' , '🌭'] , 
        ['Adit '  , '🦝' , '🍿'] , 
        ['Agung'  , '🗿 ' , '🍙']];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($maha as $mh) { ?>
    <ul>
        <li>Nama                 : <?= $mh[0] ?></li>
        <li>Peliharaan           : <?= $mh[1] ?></li>
        <li>Makanan Favorit      : <?= $mh[2] ?></li>
    </ul>
   <?php } ?> 
     

    
</body>
</html>