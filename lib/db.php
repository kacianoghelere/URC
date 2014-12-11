<?php

use mysqli;
use PDO;

/**
 * classe que serve de caminho padrão
 * para instanciar uma conexão com
 * o banco de dados usando singleton.
 */
class DB {

    /**
     * lista de conexões com o banco
     * de dados abertas para cada
     * tipo de configuração em Config.php
     */
    private static $database = array();

    /**
     * Método usado para instanciar um objeto
     * de conexão com o banco de dados.
     */
    public static function create($type = 'padrao') {
        # Verifica se a configuração de banco de dados
        # existe na classe config. Se não existir, emite
        # uma mensagem de erro.
        if (!array_key_exists($type, Config::$database)) {
            die('Configuração de banco de dados não encontrada!');
        }

        # Verifica se o tipo de banco de dados já
        # foi instanciado. Se já tiver sido criado
        # retorna a conexão com o banco existentene
        if (array_key_exists($type, self::$database)) {
            return self::$database[$type];
        }

        # Se o banco de dados ainda não tiver sido criado
        # cria uma nova conexão com o banco de dados.
        if (Config::$database[$type]['driver'] == 'mysqli') {
            self::$database[$type] = new mysqli(
                    Config::$database[$type]['servidor'], Config::$database[$type]['usuario'], Config::$database[$type]['senha'], Config::$database[$type]['banco']
            );

            if (Config::$database[$type]['charset'] != '') {
                self::$database[$type]->set_charset(
                        Config::$database[$type]['charset']);
            }

            return self::$database[$type];
        }
    }

    public static function createPDO($type = 'padrao') {
        self::$database[$type] = new PDO("mysql:host=" . Config::$database[$type]['servidor'] . ";dbname=" . Config::$database[$type]['banco'], Config::$database[$type]['usuario'], Config::$database[$type]['senha']);
        return self::$database[$type];
    }

}
