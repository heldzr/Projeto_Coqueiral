<?php

include('conect.php');

include('dbEnviar.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações</title>
    <link rel="stylesheet" href="style/conta.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

<h1><?php echo $msg; ?></h1>

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

    <section class="generals">
         <input type="checkbox" class="inputToggle">
            <div class="toggle">
                <span class="top_line common"></span>
                <span class="middle_line common"></span>
                <span class="bottom_line common"></span>
            </div>
        <div class="containers1">
            <div class="profiles">
                <div class="profileIcons">
                    <i class="fas fa-user-circle"></i>
                </div>          
                <div class="profileInfos">
                    <h3>Larissa</h3>
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
                    <p>Minhas Compras</p>
                </div>
                <div class="icons">
                    <i class="fas fa-sign-out-alt"></i>
                    <p>Sair da Conta</p>
                </div>
            </div>
        </div>
        <div class="containers2">
           
            <form action="" class="formGroups" method="post">
                <h1>INFORMAÇÕES DE PERFIL</h1>
                <div class="personalInfos">
                    <div class="profileInfosA">
                        <label for="name" class="accountLabel">Nome*</label>
                        <input type="text" name="name" id="name" class="accountInput" required>
                        <label for="username" class="accountLabel">Usuário*</label>
                        <input type="text" name="username" id="username" class="accountInput" required>
                        <label for="birthDate" class="accountLabel">Data de Nascimento*</label>
                        <input type="date" id="birthDate" name="birthDate" class="accountInput" required>
                    </div>
                    <div class="profileInfosB">
                        <label for="lastName" class="accountLabel">Sobrenome*</label>
                        <input type="text" name="sobrenome" id="lastName" class="accountInput" >
                        <label for="email" class="accountLabel">Email*</label>
                        <input type="email" name="email" id="emails" class="accountInput" required>
                        <p>Verificar email</p>
                        <select name="gender" id="gender" class="accountInput">
                            <option value="0">Selecionar gênero</option>
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="nao-binario">Não binário</option>
                            <option value="outro">Outro</option>
                        </select>
                    </div>
                </div>
                <h1>ENDEREÇO</h1>
                <div class="adressInfos">
                    <div class="adressInfosA">
                        <label for="CEP" class="accountLabel">CEP*</label>
                        <input type="text" name="CEP" id="CEP" class="accountInput" required>
                        <label for="number" class="accountLabel">Número*</label>
                        <input type="number" name="number" id="number" class="accountInput" required>
                        <label for="bairro" class="accountLabel">Bairro*</label>
                        <input type="text" name="bairro" id="bairro" class="accountInput" required>
                    </div>
                    <div class="adressInfosB">
                        <label for="streetname" class="accountLabel">Nome da Rua*</label>
                        <input type="text" name="streetname" id="streetname" class="accountInput" required>
                        <label for="complemento" class="accountLabel">Complemento</label>
                        <input type="text" name="complemento" id="complemento" class="accountInput">
                        <label for="UF" class="accountLabel">UF*</label>
                        <input type="text" name="UF" id="UF" class="accountInput" required>
                    </div>
                </div>
                <div class="formButtons">
                    <button type="submit" name="conta_btn">Salvar</button>
                </div>

                <div class="deleteAccount">
                    <p>Apagar conta</p>
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
