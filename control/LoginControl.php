<?php

/**
 * Classe controle básica para testar o nosso MVC
 */
class LoginControl extends Control {

    /**
     * Método form para ser executado dentro de nosso MVC
     */
    public function index() {        
        $this->view->set('titulo', 'URT - Acessar');
        $this->view->render('login');
    }

    /**
     * Método form para ser executado dentro de nosso MVC
     */
    public function login() {
        $this->view->set('titulo', 'URT - Ultimate RPG Tools');        
        $this->view->render('main');
    }

}
