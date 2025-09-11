<?php
namespace App\Task_3\models;


use App\Task_3\interfaces\IAuthenticator;

class Authenticator implements IAuthenticator
{
    private static $instance;

    private function __construct() {}

    public static function getInstance(): Authenticator
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public static function createNewInstance(): Authenticator
    {
        return new self();
    }

    public function authenticate(string $username, string $password): bool
    {
        return $username === "admin" && $password === "password";
    }

    private function __clone() {}
    public function __wakeup() {}
}
