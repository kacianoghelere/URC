<?php

/**
 * Classe controle singleton da página principal
 */
class MainControl extends Control {

    /**
     * Método form para ser executado dentro de nosso MVC
     */
    public function index() {
        $this->view->set('title', 'Meu primeiro MVC em PHP');
        $this->view->render('Main');
    }
}
