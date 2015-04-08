<?php

session_start();
session_destroy();

/**
 * Classe controle básica para testar o nosso MVC
 */
class IndexControl extends Control {

    /**
     * Método form para ser executado dentro de nosso MVC
     */
    public function index() {
        $this->view->set('titulo', 'URT - Acessar');
        $this->view->render('login');
    }

}
