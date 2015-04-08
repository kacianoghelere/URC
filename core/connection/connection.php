<?php

class Connection extends PDO {

    private static $instance;

    public function Connection() {
        $host = '127.0.0.1';
        $user = 'root';
        $passwd = 'd0v4hk11n';
        $database = 'urt';
        $port = '3306';

        $this->host = $host;
        $this->user = $user;
        $this->passwd = $passwd;
        $this->database = $database;
        $this->port = $port;
        $dsn = "mysql:";
        $dsn .= "host=" . $host . ";";
        $dsn .= "dbname=" . $database . ";";
        $dsn .= "port=" . $port . ";";
        parent::__construct($dsn, $user, $passwd);
    }

    public function __destruct() {
        
    }

    public static function getInstance() {
        try {
            if (!isset(self::$instance)) {
                $conn = new Connection();
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance = $conn;
                return $conn;
            }
            return self::$instance;
        } catch (PDOException $exc) {
            throw $exc;
        }
    }

}
