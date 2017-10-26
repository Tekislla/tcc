<?php

?>

<!doctype html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="<?php echo $config['base_url'] ?>bibliotecas/estilo/Semantic/semantic.css">
    <link rel="stylesheet" href="<?php echo $config['base_url'] ?>bibliotecas/estilo/interno/cadastro.css">
    <meta charset="UTF-8">
    <title>cInfo - Cadastro</title>
</head>
<body>
<link rel="stylesheet" href="<?php echo $config['base_url'] ?>bibliotecas/estilo/interno/menu.css">
<div class="ui grid">
    <div class="ten wide column centered">
        <div class="ui secondary pointing huge three item top fixed menu" id="menu">
            <a class="item" href="<?php echo $config['base_url'] ?>index.php" id="logo">
                <img id="logo" src="<?= $config['base_url'] ?>arquivos/img/logo.png">
            </a>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br>
<div class="ui middle aligned center aligned grid">
    <div class="column">
        <h1 class="ui teal image header">
            <img src="arquivos/img/logo.png" class="image">
            <div class="content">
                <h3 id="text_login">Cadastre-se!</h3>
            </div>
        </h1>
        <br><br>
        <form class="ui large form">
            <div class="ui stacked segment">
                <div class="field">
                    <h5 id="text_nome">Nome Completo</h5>
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="nome" placeholder="Nome">
                    </div>
                </div>
                <div class="field">
                    <h5 id="text_nome_exib">Nome de Exibição</h5>
                    <div class="ui left icon input">
                        <i class="unhide icon"></i>
                        <input type="text" name="nome_exib" placeholder="Nome de Exibição">
                    </div>
                </div>
                <div class="field">
                    <h5 id="text_email">Email</h5>
                    <div class="ui left icon input">
                        <i class="mail icon"></i>
                        <input type="email" name="email" placeholder="E-mail">
                    </div>
                </div>
                <div class="field">
                    <h5 id="text_senha">Senha</h5>
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
                <h5 id="text_login">Já tem uma conta? <a href="index.php?acao=login" id="clique_login"> Entre!</a></h5>
            </div>
        </form>
        <br><br><br>
        <a href="" id="sobre"><b>Sobre</b></a>
        <a href="" id="feed"><b>Feed</b></a>
        <a href="" id="crie"><b>Crie</b></a>
    </div>
</div>
</body>
</html>