<?php
namespace App\Task_3\controllers;

use App\Task_3\models\Authenticator;
use App\Task_3\views\AuthView;

class AuthController
{
    public function handle(): void
    {
        $view = new AuthView();

        if (!isset($_GET['type'])) {
            $view->showForm();
            return;
        }

        $type = $_GET['type'];

        if ($type === 'singleton') {
            $auth1 = Authenticator::getInstance();
            $auth2 = Authenticator::getInstance();
        } elseif ($type === 'new') {
            $auth1 = Authenticator::createNewInstance();
            $auth2 = Authenticator::createNewInstance();
        } else {
            echo "<p style='color:red;'>Невірний тип створення</p>";
            return;
        }

        $isSame = ($auth1 === $auth2);
        $view->renderResult($auth1, $auth2, $isSame);
    }
}
