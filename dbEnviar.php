<?php

include('conect.php');

if(isset($_POST['conta_btn'])){

    $token = 'cliente1';

    $novoItem = [
        'chave' => $token,
        'nome' => $_POST['name'],
        'sobrenome' => $_POST['sobrenome'],
        'nomeUsuario' => $_POST['username'],
        'dataNasc' => $_POST['birthDate'],
        'genero' => $_POST['gender'],
        'email' => $_POST['email'],
        'cep' => $_POST['CEP'],
        'numeroRua' => $_POST['number'],
        'nomeRua' => $_POST['streetname'],
        'bairro' => $_POST['bairro'],
        'complemento' => $_POST['complemento'],
        'uf' => $_POST['UF']
        
    ];

    $database -> getReference('dbCoqueiral/clientes/' . $token) ->update($novoItem);

    $msg = "Produto adicionado com sucesso!";

};

?>