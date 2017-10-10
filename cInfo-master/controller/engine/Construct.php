<?php

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 28/09/17
 * Time: 16:03
 */
class Construct
{
    private $url;
    private $padrao;
    const CAMINHO_VIEW = 'views/';

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @param mixed $padrao
     */
    public function setPadrao($padrao)
    {
        $this->padrao = $padrao;
    }

    public function constroi($acao, $class){
        return $class . '->' . $acao . '();';
    }

    public function view($arquivo, $data = ''){
        include self::CAMINHO_VIEW . $arquivo;
    }

    public function padroes($data = ''){
        $arquivos = scandir(self::CAMINHO_VIEW . $this->padrao, 1);

        foreach ($arquivos as $arquivo){
            $this->view($this->padrao . $arquivo, $data);
        }
    }
}