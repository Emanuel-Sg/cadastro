<?php

$usuario = "root";
$senha = '';
$db = 'cadastro';
$host = 'localhost';

$conn = new PDO("mysql:host={$host};dbname={$db}", $usuario, $senha);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// function formatar_data($data)
// {
//     return implode('/', array_reverse(explode('-', $data)));
// }

