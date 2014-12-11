<?php

/**
 * Classe de configuração da aplicação
 * em nosso MVC em PHP. Atualmente possui
 * apenas informações de configuração
 * de acesso ao banco de dados.
 */
class Config {

    /**
     * Um array de configurações possibilita a 
     * criação de modelos para múltiplos bancos
     * de dados.
     */
    public static $database = array(
        'padrao' => array(
            'servidor' => 'localhost',
            'usuario' => 'root',
            'driver' => 'mysqli',
            'senha' => 'd0v4hk11n',
            'porta' => '',
            'banco' => 'dbmvc',
            'charset' => 'utf8'
        ),
        'pgsql' => array(
            'servidor' => 'localhost',
            'usuario' => 'root',
            'driver' => 'postgre',
            'senha' => '',
            'porta' => '5432',
            'banco' => 'dbmvc',
            'charset' => 'utf-8'
        )
    );

}
