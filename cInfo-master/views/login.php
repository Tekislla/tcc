<?php

?>

<!doctype html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="<?php echo $config['base_url'] ?>bibliotecas/estilo/Semantic/semantic.css">
    <link rel="stylesheet" href="<?php echo $config['base_url'] ?>bibliotecas/estilo/interno/login.css">
    <meta charset="UTF-8">
    <title>cInfo - Login</title>
</head>
<body style="background-color: #f2f2f2">
<link rel="stylesheet" href="<?php echo $config['base_url'] ?>bibliotecas/estilo/interno/menu.css">
<div class="ui grid">
    <div class="ten wide column centered">
        <div class="ui secondary pointing huge three item top fixed menu" id="menu">
            <a class="item" href="<?php echo $config['base_url'] ?>index.php" id="logo">
                <img id="logo" src="<?= $config['base_url'] ?>arquivos/img/logo.png" style="margin-top: 9px">
            </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ui middle aligned center aligned grid">
    <div class="column">
        <h1 class="ui teal image header">
            <img src="arquivos/img/logo.png" class="image">
            <div class="content">
                <h3 id="text_login">Logue em sua conta!</h3>
            </div>
        </h1>
        <br><br>
        <form class="ui large form">
            <div class="ui stacked segment">
                <div class="field">
                    <h5 id="text_email" style="color: orange; text-align: left">Email</h5>
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="email" name="email" placeholder="E-mail">
                    </div>
                </div>
                <div class="field">
                    <h5 id="text_senha" style="color: orange; text-align: left">Senha</h5>
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" placeholder="Senha">
                    </div>
                </div>
                <div class="ui animated green large fluid submit button" tabindex="0">
                    <div class="visible content">Login</div>
                    <div class="hidden content">
                        <i class="right arrow icon"></i>
                    </div>
                </div>
                <h5 id="text_cadastro" style="color: orange; text-align: left">Novo por aqui? <a href="cadastro.php" id="clique_cadastro" style="color: green">Cadastre-se!</a></h5>
            </div>
        </form>
        <br><br><br>

        <a href="" style="text-align: left">Sobre</a>
        <a href="" style="text-align: center; margin-left: 70px; margin-right: 70px">Ajuda</a>
        <a href="" style="text-align: right; margin-right: 10px">Mais</a>
        </div>
    </div>
</body>
</html>
