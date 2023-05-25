<?php 
require ("functions.php");
    $tittle = "Home";
    $students = [
        [
            "nama" => "Genta Sena Irasta",
            "npm" => "223040168",
            "email" => "genta.sena@mail.unpas.ac.id"
        ],

        [
            "nama" => "Dicky",
            "npm" => "223040150",
            "email" => "dicky.223040150@mail.unpas.ac.id"
        ]
    ];

require ("views/index.view.php");