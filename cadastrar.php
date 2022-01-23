<?php

require_once "conexao.php";


try {

    $usuario = [
        'nome' => filter_input(INPUT_POST, "nome_cliente"),
        'email' => filter_input(INPUT_POST, "email_cliente"),
        'data' => filter_input(INPUT_POST, "data_nas_cliente"),
        'telefone' => filter_input(INPUT_POST, "telefone_cliente"),
        'senha' => filter_input(INPUT_POST, "senha_cliente")
    ];

    $sql = "INSERT INTO usuarios (nome_cliente, email_cliente, data_nasc_cliente, telefone_cliente, senha_cliente) VALUES (:nome, :email, :data, :telefone,:senha)";

    $stmt = $conn->prepare($sql);
    $stmt->execute($usuario);

    $id = $conn->lastInsertId();


    echo '<div class="alert alert-info" role="alert">
   Cadastro realizado com sucesso!
  </div>';
} catch (\Throwable $th) {
    echo $th->getMessage();
}
