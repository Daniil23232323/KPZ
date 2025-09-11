<?php
namespace App\Task_5\views;

use App\Task_5\models\Character;

class CharacterView
{
    public function showForm(): void
    {
        echo <<<HTML
            <h2>Оберіть кого створити</h2>
            <form method="get">
                <input type="hidden" name="task" value="5">
                <button type="submit" name="build" value="hero">Створити Героя</button>
                <button type="submit" name="build" value="enemy">Створити Ворога</button>
            </form>
        HTML;
    }

    public function render(Character $character, string $label): void
    {
        echo "<h2>$label створено</h2>";
        echo "<p>" . $character->getDetails() . "</p>";
        echo "<a href='?task=5'>Повернутись</a>";
    }

    public function renderError(string $message): void
    {
        echo "<p style='color: red;'>[Помилка] $message</p>";
        echo "<a href='?task=5'>Повернутись</a>";
    }
}
