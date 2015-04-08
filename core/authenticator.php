<?php

require_once '../model/entity/system_user.php';

abstract class Authenticator {

    private static $instance = null;

    private function __construct() {
        
    }

    /**
     * 
     * @return Authenticator
     */
    public static function getInstance() {

        if (self::$instance == NULL) {
            self::$instance = new AuthenticatorInMemory();
        }

        return self::$instance;
    }

    public abstract function login($login, $pass);

    public abstract function isLogged();

    public abstract function getUser();

    public abstract function logout();
}

class AuthenticatorInMemory extends Authenticator {

    public function isLogged() {
        $sess = Session::getInstance();
        return $sess->exists('sysuser');
    }

    public function login($login, $pass) {
        $v_login = "admin";
        $v_pass = "8584edef792faa72e383e37127660cf0";
        $pass_md5 = md5($pass);
        $session = Sessao::getInstance();
        if ($login == $v_login && $pass_md5 == $v_pass) {
            $sysuser = new SystemUser();
            $sysuser->setId(1);
            $sysuser->setLogin($login);            
            $sysuser->setName('Kaciano');            
            $sysuser->setEmail('kaciano_ghelere@yahoo.com.br');            
            $session->set('sysuser', $sysuser);
            return true;
        } else {
            return false;
        }
    }

    public function getUser() {
        $sess = Sessao::instanciar();
        if ($this->esta_logado()) {
            $usuario = $sess->get('sysuser');
            return $usuario;
        } else {
            return false;
        }
    }

    public function logout() {
        header('location: index.php');
    }

}

//class AuthenticatorEmBanco extends Authenticator {
//
//    public function esta_logado() {
//        $sess = Sessao::instanciar();
//        return $sess->existe('usuario');
//    }
//
//    public function expulsar() {
//        header('location: controle.php?acao=sair');
//    }
//
//    public function logar($email, $senha) {
//
//        $pdo = new PDO('mysql:dbname=dblogin;host=localhost', 'root', 'd0v4hk11n');
//        $sess = Sessao::instanciar();
//
//        $sql = "select * from usuarios where usuarios.email ='{$email}'
//                and usuarios.senha = '{$senha}'";
//
//        $stm = $pdo->query($sql);
//
//        if ($stm->rowCount() > 0) {
//
//            $dados = $stm->fetch(PDO::FETCH_ASSOC);
//
//            $usuario = new Usuario();
//            $usuario->setEmail($dados['email']);
//            $usuario->setId($dados['id']);
//            $usuario->setNome($dados['nome']);
//            $usuario->setSenha($dados['senha']);
//
//            $sess->set('usuario', $usuario);
//            return true;
//
//        }
//        else {
//            return false;
//        }
//
//    }
//
//    public function pegar_usuario() {
//        $sess = Sessao::instanciar();
//
//        if ($this->esta_logado()) {
//            $usuario = $sess->get('usuario');
//            return $usuario;
//        }
//        else {
//            return false;
//        }
//    }
//
//}