<?php

use PDO;

/**
 * Conexao com o banco de dados
 */
class Connection {

    public static $connection;

    /**
     * Retorna a instancia da conexao
     * 
     * @return type Conexao PDO
     */
    public static function get() {
        $url = "mysql:host=" . Config::$database[$type]['servidor'] . ";"
                . "dbname=" . Config::$database[$type]['banco'];
        if (self::$connection == NULL) {
            self::$database[$type] = new PDO($url, Config::$database[$type]['usuario'], Config::$database[$type]['senha']);
        }
        return self::$connection;
    }

}
