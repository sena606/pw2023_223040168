<?php
$isi_angka = 10; // cek jika $angka dibagi 2, sisa nya 1
function cek_gg($wadah_angka){
    if ($wadah_angka %2 == 1){
        return "$wadah_angka adalah bilangan Ganjil";
    }   else{
        return "$wadah_angka adalah bilangan Genap ";  
    }
}   
echo cek_gg($isi_angka);
echo "<br>";
echo cek_gg(5);
echo "<br>";
echo cek_gg(6);

?>