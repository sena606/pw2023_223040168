<?php
$emoji   = ['🗿' , '⌛' , '🎈']; 
$makan   = ['🍕' , '🍟' , '🌭' , '🍿' , '🍙'];
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
    <h2>Daftar Emoji</h2>
    <ul>
    <?php foreach($emoji as $emote) {?>
        <li><?= $emote; ?></li>
    <?php } ?>
    <ul>
        
    <h2>Daftar Makanan</h2>
    <ul>
    <?php foreach($makan as $makanan) {?>
        <li><?= $makanan; ?></li>
    <?php } ?>
    <ul>

</body>
</html>