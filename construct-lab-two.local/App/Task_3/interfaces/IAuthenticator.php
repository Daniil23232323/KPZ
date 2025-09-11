<?php
namespace App\Task_3\interfaces;

interface IAuthenticator
{
    public function authenticate(string $username, string $password): bool;
}
