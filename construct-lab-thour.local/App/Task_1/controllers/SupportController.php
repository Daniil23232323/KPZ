<?php
namespace App\Task_1\controllers;

use App\Task_1\models\FirstLevelSupport;
use App\Task_1\models\SecondLevelSupport;
use App\Task_1\models\ThirdLevelSupport;
use App\Task_1\models\FourthLevelSupport;
use App\Task_1\models\FinalSupport;
use App\Task_1\views\SupportView;

class SupportController
{
    private FirstLevelSupport $firstHandler;

    public function __construct() {
        // Ініціалізація ланцюжка
        $first = new FirstLevelSupport();
        $second = new SecondLevelSupport();
        $third = new ThirdLevelSupport();
        $fourth = new FourthLevelSupport();
        $final = new FinalSupport();


        $first->setNext($second)->setNext($third)->setNext($fourth)->setNext($final);

        $this->firstHandler = $first;
    }

    public function handle(): void
    {
        $view = new SupportView();
        $result = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $input = trim($_POST['level'] ?? '');
            if ($input === "0") {
                $result = "👋 Ви вийшли з підтримки.";
            } else {
                $result = $this->firstHandler->handle($input);
            }
            $view->renderResult($result);
        } else {
            $view->showForm();
        }
    }
}
