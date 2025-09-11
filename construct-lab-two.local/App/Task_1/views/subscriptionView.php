<?php

namespace App\Task_1\views;

use App\Task_1\interfaces\Subscription;

class subscriptionView
{
    public function printError(string $msg): void
    {
        echo "<p style='color:red;'>[ERROR] {$msg}</p>";
    }

    public function printLog(string $msg): void
    {
        echo "<p style='color:green;'>[LOG] {$msg}</p>";
    }

    public function render(Subscription $subscription): void
    {
        echo "<h2>Деталі підписки:</h2>";
        echo "<ul>";
        echo "<li><strong>Щомісячна плата:</strong> {$subscription->getMonthlyFee()}</li>";
        echo "<li><strong>Мінімальний період:</strong> {$subscription->getMinPeriod()} місяців</li>";
        echo "<li><strong>Канали:</strong> " . implode(', ', $subscription->getAvailableChannels()) . "</li>";
        echo "<li><strong>Додаткові можливості:</strong> " . implode(', ', $subscription->getAdditionalFeatures()) . "</li>";
        echo "</ul>";
        echo "<a href='/'>Повернутись</a>";
    }

    public function showForm(): void
    {
        echo <<<HTML
        <h2>Виберіть спосіб підписки та її тип</h2>
         <form method="get">
                <input type="hidden" name="task" value="1">
            <label for="factory">Спосіб підписки:</label>
            <select name="factory" id="factory">
                <option value="WebSite">WebSite</option>
                <option value="MobileApp">MobileApp</option>
                <option value="ManagerCall">ManagerCall</option>
            </select><br><br>

            <label for="type">Тип підписки:</label>
            <select name="type" id="type">
                <option value="Domestic">Domestic</option>
                <option value="Educational">Educational</option>
                <option value="Premium">Premium</option>
            </select><br><br>

            <button type="submit">Підтвердити</button>
        </form>
        HTML;
    }
}
