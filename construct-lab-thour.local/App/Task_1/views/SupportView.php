<?php
namespace App\Task_1\views;

class SupportView
{
    public function showForm(): void
    {
        echo <<<HTML
        <!DOCTYPE html>
        <html lang="uk">
        <head>
            <meta charset="UTF-8">
            <title>Система підтримки</title>
            <link rel="stylesheet" href="/public/assets/styles/styles.css">
        </head>
        <body>
        <div class="container">
            <h2>Система підтримки</h2>
            <form method="post">
                <label for="level">Введіть рівень (1-4, 0 для виходу):</label><br>
                <input type="number" id="level" name="level" min="0" max="4" required>
                <br><br>
                <button type="submit">Відправити</button>
            </form>
        </div>
        </body>
        </html>
        HTML;
    }

    public function renderResult(?string $result): void
    {
        $safeResult = htmlspecialchars($result ?? '');
        echo <<<HTML
        <!DOCTYPE html>
        <html lang="uk">
        <head>
            <meta charset="UTF-8">
            <title>Система підтримки</title>
            <link rel="stylesheet" href="/public/assets/styles/styles.css">
        </head>
        <body>
        <div class="container">
            <h2>Система підтримки</h2>
            <form method="post">
                <label for="level">Введіть рівень (1-4, 0 для виходу):</label><br>
                <input type="number" id="level" name="level" min="0" max="4" required>
                <br><br>
                <button type="submit">Відправити</button>
            </form>

            <div class="response">
                <strong>Відповідь:</strong> {$safeResult}
            </div>
            <div>
             <a href='/'>Назад</a>;
            </div>
        </div>
        </body>
        </html>
        HTML;
    }
}
