<?php 
$hari    = array("senin" , "selasa" , "rabu" , "kamis" , "jum'at" , "sabtu" , "minggu");
$bulan   = ["januari" , "februari" , "maret" , "april" , "mei" , "juni" , "july"];
$myarray = ["Sena" , "19" , false];
$emoji   = ['🗿' , '⌛' , '🎈'];
$makan   = ['🍕' , '🍟' , '🌭' , '🍿' . '🍙'];

var_dump($hari);     // print secara keseluruhan

echo "<br>";

print_r($bulan);     // print secara keseluruhan tanpa ket string

echo $emoji['0'];    // print salah satu


// menambahkan element di akhir

$hari [] = "minggu";

//menambahkan element di akhir menggunakan array_push

array_push($bulan,"juni" , "july");
print_r($bulan);
?>