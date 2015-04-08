<?php

/**
 * Classe controle básica para testar o nosso MVC
 */
class IndexControl extends Control {

    /**
     * Método para carregar a tela de login
     * 
     */
    public function index() {
        $this->view->set('titulo', 'Entrar');
        $this->view->render('login');
    }

}
