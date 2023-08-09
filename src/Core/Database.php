<?php

namespace App\Core;

use Exception;
use PDO;

// Retenir son utilisation  => Database::getPDO()
// Design Pattern : Singleton
class Database
{
    private $dbh;
    private static $_instance;
    private function __construct()
    {

        try {
            $this->dbh = new PDO(
                "{$_ENV['DB_TYPE']}:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']};charset=utf8",
                $_ENV['DB_USER'],
                $_ENV['DB_PASSWORD'],
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
            );
        } catch (Exception $exception) {
            dd($exception);
        }
    }
    // the unique method you need to use
    public static function getPDO(): ?PDO
    {
        // If no instance => create one
        if (empty(self::$_instance)) {
            self::$_instance = new Database();
        }
        return self::$_instance->dbh;
    }
}