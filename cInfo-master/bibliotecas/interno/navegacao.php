<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 03/10/17
 * Time: 08:35
 */

function active($acao){
    $active['index']  = '';
    $active['bla']  = '';
    $active['ble']  = '';

    if (!isset($acao)){
        $active['index']  = 'active';
    } else {
        $active[$acao] = 'active';
    }

    return $active;
}