<?php

namespace App\Task_1\controllers;

use App\Task_1\models\factories\{WebSite, Mobile, Manage};
use App\Task_1\views\subscriptionView;

class SubscriptionController
{
    public function handle(): void
    {
        $view = new subscriptionView();

        if (!isset($_GET['factory']) || !isset($_GET['type'])) {
            $view->showForm(); // якщо ще не обрано — показати форму
            return;
        }

        $factoryName = $_GET['factory'];
        $type = $_GET['type'];

        $factory = match($factoryName) {
            'WebSite' => new WebSite(),
            'MobileApp' => new Mobile(),
            'ManagerCall' => new Manage(),
            default => null,
        };

        if (!$factory) {
            $view->printError("Невірний спосіб підписки");
            return;
        }

        try {
            $subscription = $factory->create_Subscription($type);
            $view->render($subscription);
        } catch (\Exception $e) {
            $view->printError("Помилка: " . $e->getMessage());
        }
    }
}
