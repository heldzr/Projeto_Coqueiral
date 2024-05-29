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




if(isset($_POST['add_btn'])){

    $token = uniqid();

    $files = $_FILES['fotoProduto'];
    $names = $files['name'];
    $tmp_name = $files['tmp_name'];

    // Limitando as imagens
    $contador = 1;
    $fotoProdutoExtension = '';

    foreach ($names as $index => $name) {
        if ($contador <= 4) {
            $extension = pathinfo($name, PATHINFO_EXTENSION);
            if ($contador == 1) {
                $fotoProdutoExtension = $extension;
            }
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
        'codigoProduto' => $_POST['codigoProduto'],
        'preco' => $_POST['preco'],
        'linkLoja' => $_POST['linkLoja'],
        'fotoProdutoExtension' => $fotoProdutoExtension,
    ];

    $database->getReference('dbCoqueiral/produtos/' . $token)->set($novoItem);
    
    $msg = "Produto adicionado com sucesso!";

    header('Location: adm.php?success=1');
    exit();
}

if (isset($_POST['dlt_btn'])) {
    $codigoProduto = $_POST['codigoProduto'];

    // Buscar o produto no banco de dados
    $produtos = $database->getReference('dbCoqueiral/produtos')->getValue();
    $produtoEncontrado = false;

    foreach ($produtos as $key => $produto) {
        if ($produto['codigoProduto'] == $codigoProduto) {
            // Deletar o produto
            $database->getReference('dbCoqueiral/produtos/' . $key)->remove();
            $produtoEncontrado = true;
            break;
        }
    }

    if ($produtoEncontrado) {
        $msg = "Produto deletado com sucesso!";
        header('Location: adm.php?deleted=1');
    } else {
        $msg = "Produto não encontrado!";
        header('Location: adm.php?error=1');
    }
    exit();
}

?>

