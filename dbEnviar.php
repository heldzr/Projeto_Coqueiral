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

    $msg = "Dados atualizados com sucesso!";

};




if(isset($_POST['adm_btn'])){

    $token = uniqid();

    $files = $_Files['file'];
    $names = $files['name'];
    $tmp_name = $files['tmp_name'];

    //Limitando as imagens

    $contador = 1;

    foreach($names as $index => $name){
        if($contador <= 4){
            $extension = pathinfo($name, PATHINFO_EXTENSION);
            $newName = $token . "_" . $contador . "." . $extension;
            move_uploaded_file($tmp_name[$index], 'static/' . $newName);
            $contador++;
        }
    }

   

    $novoItem = [
        'chave' => $token,
        'nomeProduto' => $_POST['nomeProduto'],
        'DescProduto' => $_POST['DescProduto'],
        'nomeLoja' => $_POST['nomeLoja'],
        'preco' => $_POST['preco'],
        'linkLoja' => $_POST['linkLoja'],    
    ];

    $database -> getReference('dbCoqueiral/produtos/' . $token) ->set($novoItem);

    $msg = "Produto adicionado com sucesso!";



}



?>

