<?php

namespace App\Task_4\views;

use App\Task_4\models\Virus;

class VirusView
{
    public function showForm(): void
    {
        echo <<<HTML
        <h2>Створення вірусу</h2>
         <form method="get">
                <input type="hidden" name="task" value="4">
            <label>Ім'я: <input name="name" required></label><br>
            <label>Вага: <input name="weight" type="number" required></label><br>
            <label>Вік: <input name="age" type="number" required></label><br>
            <label>Вид: <input name="species" required></label><br>
            <button type="submit">Клонувати</button>
        </form>
        HTML;
    }

    public function render(Virus $original, Virus $clone): void
    {
        echo "<h2>Оригінал:</h2>";
        $this->renderDetails($original);

        echo "<h2>Клон:</h2>";
        $this->renderDetails($clone);

        echo "<a href='?task=4'>Повернутись</a>";
    }

    private function renderDetails(Virus $virus): void
    {
        $details = $virus->getDetails();
        echo "<ul>";
        foreach ($details as $key => $value) {
            if (is_array($value)) {
                echo "<li><strong>$key:</strong> " . implode(', ', $value) . "</li>";
            } else {
                echo "<li><strong>$key:</strong> {$value}</li>";
            }
        }
        echo "</ul>";
    }
}
