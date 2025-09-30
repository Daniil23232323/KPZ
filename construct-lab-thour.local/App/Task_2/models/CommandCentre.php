<?php

namespace App\Task_2\models;

use App\Task_2\models\Aircraft;
use App\Task_2\models\Runway;

class CommandCentre
{
    private array $runways = [];

    public function addRunway(Runway $runway): void
    {
        $this->runways[] = $runway;
    }

    public function requestLanding(Aircraft $aircraft): void
    {
        foreach ($this->runways as $runway) {
            if (!$runway->isBusy()) {
                echo "🛬 Диспетчер: Дозволяємо посадку для {$aircraft->getName()} на смузі {$runway->getId()}.\n";
                $runway->occupy();
                return;
            }
        }

        echo "⛔ Диспетчер: Всі смуги зайняті! {$aircraft->getName()} має чекати.\n";
    }

    public function requestTakeoff(Aircraft $aircraft): void
    {
        foreach ($this->runways as $runway) {
            if ($runway->isBusy()) {
                echo "🛫 Диспетчер: Дозволяємо зліт для {$aircraft->getName()} зі смуги {$runway->getId()}.\n";
                $runway->free();
                return;
            }
        }

        echo "⛔ Диспетчер: Жодна смуга не зайнята, зліт не потрібен.\n";
    }
}
