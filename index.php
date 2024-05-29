<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INÍCIO</title>
    <link rel="stylesheet" href="style/index.css">
    <script src="https://kit.fontawesome.com/b09944a1ea.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</head>
<body>
    <div class="navbar">
        <img src="imagens/logo.png" alt="logo coqueiral" class="logo">
        <div class="nav-icon-container">
            <img src="imagens/ajudaazul 1.png" alt="ajuda" class="ajuda">
            <img src="imagens/Group 159.png" alt="perfil" class="perfil">
            <img src="imagens/Vector.png" alt="notificação" class="notificacao">
            <img src="imagens/sacolinhascoqueiral 1.png" alt="sacola" class="sacola">
        </div>
        <button id="menuBtn" class="menu-button"><i class="fas fa-bars"></i></button>
        <div class="header-inner-content show-menu">
            <nav>
                <ul>
                    <li>INÍCIO</li>
                    <li> - </li>
                    <li>SOBRE</li>
                    <li> - </li>
                    <li>VENDER NA COQUEIRAL</li>
                    <li> - </li>
                    <li>ÉTICA</li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="slider">
        <div class="slides">
            <div class="slide first">
                <img src="imagens/picture4.png" alt="Bem vindos a coqueiral" />
            </div>
            <div class="slide">
                <img src="imagens/picture2.png" alt="Coleção Ki Calor" />
            </div>
            <div class="slide">
                <img src="imagens/picture3.png" alt="Feliz dia do cliente!" />
            </div>
            <div class="slide">
                <img src="imagens/picture4.png" alt="Confira nossa nova coleção" />
            </div>
        </div>
    </div>

    <div class="search-container">
        <div class="search-content">
            <input type="text" id="search" placeholder="Pesquise o que você procura...">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>
    <hr class="divider">
    <div>
        <div class="page-inner-content">
            <h3 class="section-title">Produtos em alta</h3>
            <div class="subtitle-underline"></div>
        </div>

        <div class="cols cols-4">
            <?php
            include('conect.php');
            $produtos = $database->getReference('dbCoqueiral/produtos')->getValue();
            if ($produtos) {
                foreach ($produtos as $produto) {
                    echo '<div class="product">';
                    echo '<img src="static/' . $produto['chave'] . '_1.' . $produto['fotoProdutoExtension'] . '" alt="produto">';
                    echo '<p class="product-name">' . $produto['nomeProduto'] . '</p>';
                    echo '<p class="product-description">' . $produto['DescProduto'] . '</p>';
                    echo '<p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>';
                    echo '<p class="product-price">R$' . $produto['preco'] . '</p>';
                    echo '</div>';
                }
            } else {
                echo '<p>Nenhum produto encontrado.</p>';
            }
            ?>
        </div>
    </div>
    <footer> 
        <hr> 
        <div class="geral"> 
            <h4>Contato</h4> 
            <p>coqueiralrecife@contato.br</p>
            <h4>©️ 2024 BY COQUEIRAL</h4>
        </div>
    </footer>
</body>
</html>
