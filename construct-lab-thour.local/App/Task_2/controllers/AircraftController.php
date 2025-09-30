<?php
namespace App\Task_2\controllers;

use App\Task_2\models\Aircraft;
use App\Task_2\models\Runway;
use App\Task_2\models\CommandCentre;
use App\Task_2\views\AircraftView;

class AircraftController
{
    private CommandCentre $commandCentre;
    private AircraftView $view;
    private array $aircrafts = [];

    public function __construct()
    {
        $this->commandCentre = new CommandCentre();
        $this->view = new AircraftView();

        // Ініціалізуємо дві смуги
        $this->commandCentre->addRunway(new Runway());
        $this->commandCentre->addRunway(new Runway());

        // Ініціалізація літаків
        $this->aircrafts['Alpha'] = new Aircraft('Alpha', $this->commandCentre);
        $this->aircrafts['Bravo'] = new Aircraft('Bravo', $this->commandCentre);
    }

    public function handle(): void
    {
        $output = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $action = $_POST['action'] ?? '';
            $plane = $_POST['aircraft'] ?? '';

            if (isset($this->aircrafts[$plane])) {
                $aircraft = $this->aircrafts[$plane];

                // Буфер для виводу
                ob_start();
                if ($action === 'landing') {
                    $aircraft->requestLanding();
                } elseif ($action === 'takeoff') {
                    $aircraft->requestTakeoff();
                }
                $output = ob_get_clean();
            } else {
                $output = "⛔ Літак не знайдено!";
            }

            $this->view->renderResult($output);
        } else {
            $this->view->showForm(array_keys($this->aircrafts));
        }
    }
}
