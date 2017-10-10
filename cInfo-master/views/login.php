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
<body>
<link rel="stylesheet" href="<?php echo $config['base_url'] ?>bibliotecas/estilo/interno/menu.css">
<div class="ui grid">
    <div class="ten wide column centered">
        <div class="ui secondary pointing huge three item top fixed menu" id="menu">
            <a class="item" href="<?php echo $config['base_url'] ?>index.php" id="logo">
                <img src="<?= $config['base_url'] ?>arquivos/img/logo.png" style="">
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

        <form class="ui large form">
            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="email" name="email" placeholder="E-mail">
                    </div>
                </div>
                <div class="field">
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
            </div>
        </form>
    </div>
</body>
</html>
