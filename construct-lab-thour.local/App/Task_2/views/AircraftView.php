<?php
namespace App\Task_2\views;

class AircraftView
{
    public function showForm(array $aircrafts): void
    {
        $options = '';
        foreach ($aircrafts as $plane) {
            $options .= "<option value='{$plane}'>{$plane}</option>";
        }

        echo <<<HTML
        <!DOCTYPE html>
        <html lang="uk">
        <head>
            <meta charset="UTF-8">
            <title>Система керування авіацією</title>
            <link rel="stylesheet" href="/public/assets/styles/styles.css">
        </head>
        <body>
        <div class="container">
            <h2>Система керування авіацією</h2>
            <form method="post">
                <label>Виберіть літак:</label><br>
                <select name="aircraft">{$options}</select><br><br>
                
                <label>Дія:</label><br>
                <select name="action">
                    <option value="landing">Посадка</option>
                    <option value="takeoff">Зліт</option>
                </select><br><br>

                <button type="submit">Виконати</button>
            </form>
        </div>
        </body>
        </html>
        HTML;
    }

    public function renderResult(string $output): void
    {
        echo <<<HTML
        <!DOCTYPE html>
        <html lang="uk">
        <head>
            <meta charset="UTF-8">
            <title>Система керування авіацією</title>
            <link rel="stylesheet" href="/public/assets/styles/styles.css">
        </head>
        <body>
        <div class="container">
            <h2>Результат операції</h2>
            <pre>{$output}</pre>
            <a href='?task=2'>Назад</a>
        </div>
        </body>
        </html>
        HTML;
    }
}
