<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração de Produtos</title>
    <link rel="stylesheet" href="style/adm.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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

<section class="admin-section">
    <input type="checkbox" class="inputToggle">
                <div class="toggle">
                    <span class="top_line common"></span>
                    <span class="middle_line common"></span>
                    <span class="bottom_line common"></span>
                </div>
            <div class="adm_container">
                <div class="profiles">
                    <div class="profileIcons">
                        <i class="fas fa-user-circle"></i>
                    </div>          
                    <div class="profileInfos">
                        <h3>Administrador</h3>
                    </div>
                </div>
        
                <div class="container1-icons">
                    <div class="icons">
                        <i class="fas fa-user"></i>
                        <a href="/profile" class="iconLinks">
                            <p >Meu Perfil</p>
                        </a>
                    </div>
                    <div class="icons">
                        <i class="fas fa-shopping-bag"></i>
                        <p>Meus Produtos</p>
                    </div>

                    <div class="icons">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>Sair da Conta</p>
                    </div>
                </div>
            </div>
            
    <div class="form_container">
       <form action="" class="form_container">
        <h1>Adicionar Produtos</h1>
         <div class="info_container">
            <label for="nomeProduto">Nome do Produto*</label>
            <input type="text" name="nomeProduto" class="info_input" required>

            <label for="fotoProduto" >Foto do Produto*</label>
            <input type="file" name="fotoProduto" class="info_input" required>

            <label for="DescProduto" >Descrição do Produto*</label>
            <textarea name="DescProduto" id="DescProduto" placeholder="Exemplo: Conjunto Verão Feminino"></textarea>

            <label for="nomeLoja" >Nome da Loja*</label>
            <input type="text" name="nomeLoja" class="info_input" required>

            <label for="preco">Preço do Produto*</label>
            <input type="number" name="preco" class="info_input" required>

            <label for="linkLoja" >Link para a Loja*</label>
            <input type="url" name="linkLoja" class="info_input" required>
         </div>

         <div class="form_btn">
                    <button type="submit" name="adm_btn">Salvar</button>
                </div>
       </form>
    </div>
</section>

<footer> 
        <hr> 
        <div class="geral"> <h4>Contato</h4> 
                <p>coqueiralrecife@contato.br</p>
                <h4>©️ 2024 BY COQUEIRAL</h4>
                </div>
          </footer>

</body>
</html>
