<?php
    $active = active($_GET['acao']);
?>
<link rel="stylesheet" href="<?php echo $config['base_url'] ?>bibliotecas/estilo/interno/menu.css">
<div class="ui grid">
    <div class="ten wide column centered">
        <div class="ui secondary pointing huge three item top fixed menu" id="menu">
            <div class="item">
                    <a class="<?php echo $active['sobre'] ?> item" href="<?php echo $config['base_url'] ?>index.php?acao=sobre">
                        Sobre
                    </a>
                    <a class="<?php echo $active['feed'] ?> item" href="<?php echo $config['base_url'] ?>index.php?acao=feed">
                        Feed
                    </a>
                    <a class="<?php echo $active['crie'] ?> item" href="<?php echo $config['base_url'] ?>index.php?acao=crie">
                        Crie
                    </a>
            </div>
            <a class="item" href="<?php echo $config['base_url'] ?>index.php" id="logo">
                <img src="<?= $config['base_url'] ?>arquivos/img/logo.png" style="">
            </a>
            <div class="item">
                <a class="ui item" href="<?php echo $config['base_url'] ?>index.php?acao=login">
                    Login
                </a>
                <div class="item">
                    <div class="ui transparent icon input" id="right" style="">
                        <input type="text" placeholder="Search users">
                        <i class="search link icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>