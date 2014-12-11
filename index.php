<?php

require_once './lib/request.php';
require_once './lib/control.php';
require_once './lib/view.php';
require_once './lib/config.php';
require_once './lib/db.php';

$control = Request::get('control');
$action = Request::get('action');

//print "O controle é: {$control}<br>";
//print "O método do controle é: {$action}";
# Se o controle não for informado, assume Home como padrão
if ($control == '') {
    # agora definimos um controle padrão
    # quando nenhum controle for informado
    $control = "Home";
}

# verifica se o arquivo de controle existe na pasta controle
if (file_exists("./control/{$control}Control.php")) {

    # inclui o controle na página
    require_once "./control/{$control}Control.php";
} else {
    die("<br>O controle <strong>{$control}</strong> 
              não existe na pasta controle do MVC");
}

# adiciona a terminação Controle
# ao nome do controle
$control .= 'Control';

# instancia o controle
$control_inst = new $control();

# agora,verificamos de a ação foi informada
if ($action == "") {
    # se não informamos a ação
    # usamos o método padrão index
    $action = 'listar';
}

# verifica se o método existe no objeto controle
if (method_exists($control_inst, $action)) {
    # se existir, executa o método
    $control_inst->$action();
} else {
    # se não existir, emite uma mensagem de erro
    die('<br>Page not found!!!');
}