<?php 
$maha = [['N'=>'Asep'   , 
          'B' =>'🐶'    , 
          'M'=>'🍕']    ,
          
        ['N'=>'Ahmad'   ,
         'B' =>'🐷'     , 
         'M'=>'🍟']     , 
         
        ['N'=>'Agus '   , 
        'B' =>'🐮'      , 
        'M'=>'🌭']      , 

        ['N'=>'Adit '   , 
        'B' =>'🦝'      , 
        'M'=>'🍿']      , 

        ['N'=>'Agung'   , 
        'B' =>'🗿 '     , 
        'M'=>'🍙']]     ;    
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
        <li>Nama                 : <?= $mh['N'] ?></li>
        <li>Peliharaan           : <?= $mh['B'] ?></li>
        <li>Makanan Favorit      : <?= $mh['M'] ?></li>
    </ul>
   <?php } ?> 
     

    
</body>
</html>