<?php
namespace App\Task_3\views;

class AuthView
{
    public function showForm(): void
    {
        echo <<<HTML
            <h2>Оберіть тип створення екземплярів IAuthenticator</h2>
             <form method="get">
                <input type="hidden" name="task" value="3">
                <label><input type="radio" name="type" value="singleton" checked> Singleton</label><br>
                <label><input type="radio" name="type" value="new"> Нові екземпляри</label><br><br>
                <button type="submit">Перевірити</button>
            </form>
        HTML;
    }

    public function renderResult(object $auth1, object $auth2, bool $isSame): void
    {
        echo "<h2>Результат:</h2>";
        echo "<p><strong>Hash 1:</strong> " . spl_object_hash($auth1) . "</p>";
        echo "<p><strong>Hash 2:</strong> " . spl_object_hash($auth2) . "</p>";
        echo "<p><strong>Результат:</strong> " . ($isSame ? "Один і той самий екземпляр (Singleton)" : "Різні екземпляри") . "</p>";
        echo "<a href='/?task=3'>Повернутись</a>";
    }
}
