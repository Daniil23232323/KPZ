<?php

namespace App\Task_4\controllers;

use App\Task_4\models\Virus;
use App\Task_4\views\VirusView;

class VirusController
{
    public function handle(): void
    {
        $view = new VirusView();

        if (!isset($_GET['name'], $_GET['weight'], $_GET['age'], $_GET['species'])) {
            $view->showForm();
            return;
        }

        $virus = new Virus($_GET['name'], $_GET['weight'], $_GET['age'], $_GET['species']);
        $virus->addChild(new Virus("Дитина 1", 1.1, 1, "Subspecies A"));
        $virus->addChild(new Virus("Дитина 2", 1.2, 2, "Subspecies B"));

        $clone = clone $virus;

        $view->render($virus, $clone);
    }
}
