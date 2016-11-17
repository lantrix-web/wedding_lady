<?php

//namespace config;

class db
{
    public function __construct()
    {
        die('dsads');
    }

    public static function getConnection()
    {
        $paramsPath = ROOT.'/application/config/db_params.php';

        $params = include($paramsPath);

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']};charset=utf8";
        try {
            $db = new PDO($dsn, $params['user'], $params['password']);
        }
        catch (PDOException $e)
        {
            echo 'Подключение не удалось: ' . $e->getMessage();
        }
        return $db;
    }
}