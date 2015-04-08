<?php

/**
 * 
 * Classe controle base para todos os controles do nosso MVC em PHP.
 * Ela serve para compartilhar código entre todos os controles.
 */
class Control {

    /**
     * Variável usada como mecanismo
     * de renderização de visões.
     * O objeto Visao do arquivo visao.php
     */
    protected $view = null;

    /**
     * Construtor da classe, inicializando o
     * mecanismo de visão dos controles
     */
    public function __construct() {
        $this->view = new View();
    }

    public function execute() {
        $action = Request::get('action');

        # agora,verificamos de a ação foi informada
        if ($action == '') {
            # se não informamos a ação
            # usamos o método padrão index
            $action = 'index';
        }

        # verifica se o método existe no objeto controle
        if (method_exists($this, $action)) {
            # se existir, executa o método
            $this->$action();
        } else {
            # se não existir, emite uma mensagem de erro
            die('<br>Action not found!!!');
        }
    }
    
    /**
     * Método para incluir e carregar
     * um modelo dinamicamente dentro
     * de um controle.
     */
    public function getModel($name) {
        # procura o arquivo modelo dentro
        # da pasta modelos.
        if (file_exists("model/{$name}.php")) {            
            include_once "model/{$name}.php";
        } else {
            die("Modelo <strong>{$name}</strong> não encontrado na pasta modelos.");
        }

        # se o arquivo existir, instancia o objeto
        # e usa o mesmo como propriedade do controle
        $this->$name = new $name();
    }

    /**
     * Método index padrão usado em todos os controles.
     */
    public function index() {
        die('Comando index do controle base');
    }

}
