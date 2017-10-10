<?php

require_once 'engine/Construct.php';

class Olamundo extends Construct
{
    
    public function index(){
        $dado['titulo'] = 'bleble';
        $this->view('lixo.php', $dado);
        $this->view('pagina1.php');
    }
}