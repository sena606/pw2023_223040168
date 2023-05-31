<?php 
$fsr = mysqli_connect("localhost","root","","fsera");

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
?>