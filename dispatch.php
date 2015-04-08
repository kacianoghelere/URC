<?php

define('CONTROL', './control/');
require_once './lib/request.php';
require_once './lib/control.php';
require_once './lib/view.php';
require_once './lib/config.php';
require_once './lib/db.php';

class Dispatch {

    function handle() {
        $control = Request::get('control');        
        //print "O controle é: {$control}<br>";
        //print "O método do controle é: {$action}";
        # Se o controle não for informado, assume Home como padrão
        if ($control == '') {
            # agora definimos um controle padrão
            # quando nenhum controle for informado
            $control = "Index";
        }

        # adiciona a terminação Controle
        # ao nome do controle
        $control .= 'Control';

        # verifica se o arquivo de controle existe na pasta controle
        if (file_exists(CONTROL . "{$control}.php")) {
            # inclui o controle na página
            require_once CONTROL . "{$control}.php";
        } else {
            die("<br>O controle <strong>{$control}</strong> não existe na pasta controle do MVC");
        }

        # instancia o controle
        $control_inst = new $control();
        $control_inst->execute();
    }

}
