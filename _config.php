<?php

header('Content-Type: text/html; charset=utf-8');

date_default_timezone_set('America/Sao_Paulo');


$db =  [
    "hostname" => "localhost",
    "database" =>  "coluna_da_ponta",
    "username" =>  "root",
    "password" =>  ""
];


$conn = mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);

if (!$conn)
    die('erro' . mysqli_connect_error());
