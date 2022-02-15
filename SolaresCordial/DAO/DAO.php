<?php

namespace SolaresCordial\DAO;

use PDO;

class DAO
{
    public static function conectar()
    {
        date_default_timezone_set('America/Sao_Paulo');
        $pdo = null;
        if ($pdo === null) {
            try {
                $pdo = new PDO(HOST,USER,PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                echo 'Não foi possível conectar ao banco de dados! <br><br>'.$e;
            }
        }
        return $pdo;
    }
}