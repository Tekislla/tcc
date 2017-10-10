<?php

require_once 'config/config.php';
require_once 'controller/Controller.php';
require_once 'controller/engine/Construct.php';
require_once 'bibliotecas/interno/navegacao.php';

$url    = $config['base_url'];
$padrao = $config['views_padrao'];

if (!isset($_GET['acao'])){
    $acao = 'index';
} else {
    $acao = $_GET['acao'];
}

$pagina = new Controller();
$pagina->setUrl($url);
$pagina->setPadrao($padrao);

$construct = new Construct();
$carrega = $construct->constroi($acao, '$pagina');

eval($carrega);
