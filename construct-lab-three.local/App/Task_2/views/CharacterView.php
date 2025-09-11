<?php
namespace App\Task_2\views;

use App\Task_2\models\interfaces\CharacterInterface;

class CharacterView
{
    public function showForm(): void
    {
        echo <<<HTML
        <h2>Вибір героя та предметів</h2>
        <form method="post">
            <label>Клас героя:</label>
            <select name="heroClass">
                <option value="Mage">Mage</option>
                <option value="Warrior">Warrior</option>
                <option value="Paladin">Paladin</option>
            </select><br><br>

            <label>Зброя:</label>
            <select name="weapon">
                <option value="none">--</option>
                <option value="sword">Sword</option>
                <option value="axe">Axe</option>
                <option value="staff">Staff</option>
            </select><br><br>

            <label>Броня:</label>
            <select name="armor">
                <option value="none">--</option>
                <option value="plate">Plate</option>
                <option value="leather">Leather</option>
                <option value="chainmail">Chainmail</option>
            </select><br><br>

            <label>Артефакт:</label>
            <select name="artifact">
                <option value="none">--</option>
                <option value="ring">Ring</option>
                <option value="amulet">Amulet</option>
                <option value="book">Book</option>
            </select><br><br>

            <button type="submit">Показати результат</button>
        </form>
        HTML;
    }

    public function renderResult(CharacterInterface $character): void
    {
        echo "<h3>Характеристики героя {$character->getName()}:</h3>";
        echo "<ul>";
        echo "<li>HP: {$character->getHP()}</li>";
        echo "<li>Attack: {$character->getAttack()}</li>";
        echo "<li>Defense: {$character->getDefense()}</li>";
        echo "</ul>";
        echo '<a href="?task=2">← Назад</a>';
    }
}
