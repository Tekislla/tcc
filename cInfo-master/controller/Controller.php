<?php

require_once 'engine/Construct.php';

class Controller extends Construct
{
    public $caminho = '';

    public function index(){
        $data['titulo_pagina'] = 'cInfo';
        $this->padroes($data);
    }

    public function login(){
        $this->view('login.php');
    }

    public function sobre(){
        $data['titulo_pagina'] = 'cInfo - Sobre';
        $this->padroes($data);
        echo 'bla';
    }

    public function feed(){
        $data['titulo_pagina'] = 'cInfo - Feed';
        $this->padroes($data);
        echo 'bla';
    }

    public function crie(){
        $data['titulo_pagina'] = 'cInfo - Crie';
        $this->padroes($data);
        echo 'bla';
    }
}