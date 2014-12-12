<?php

/**
 * Classe controle básica para testar o nosso MVC
 */
class HomeControl extends Control {

    /**
     * Método form para ser executado dentro de nosso MVC
     */
    public function form() {
        die('Método form executado.');
    }

    /**
     * Método listar que será executado pela URL.
     */
    public function listar() {
        # carrega o modelo Usuario que está na pasta modelos
        $this->getModel('Usuario');

        # defino uma variável para receber a lista de usuários
        $lista = array();

        # uso o método bind para vincular a variável lista dentro da visão.
        $this->view->bind('lista', $lista);

        # a partir de agora, toda alteração na variável lista é refletida
        # na variável lista dentro da visão
        # Uso o modelo para listar os usuário cadastrados no banco
        $lista = $this->Usuario->listAll();

        # indico a visão para renderizar 
        # a lista de usuários no navegador
        $this->view->render('lista');
    }

    /**
     * Método form para ser executado dentro de nosso MVC
     */
    public function index() {
        # Agora esse método usa o mecanismo de visão
        # Cria uma variável chamada "titulo" para ser utilizada dentro do arquivo
        # de visão do MVC
        $this->view->set('titulo', 'Meu primeiro MVC em PHP');

        # Diz ao nosso mecanismo de visão para renderizar os seus dados
        # usando o arquivo de visão visoes/home/index.php
        $this->view->render('home/index');
    }

}
