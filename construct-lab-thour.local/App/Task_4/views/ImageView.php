<?php
namespace App\Task_4\views;

class ImageView
{
    public function render(string $imageHtml): void
    {
        echo <<<HTML
        <!DOCTYPE html>
        <html lang="uk">
        <head>
            <meta charset="UTF-8">
            <title>Завантаження зображень</title>
            <link rel="stylesheet" href="/public/assets/styles/styles.css">
        </head>
        <body>
        <div class="container">
            <h2>Завантаження зображень через стратегії</h2>
            <form method="post">
                <label>Виберіть стратегію:</label><br>
                <div><h2 style="color: red">УВАГА!<br>
                1. Вибравши локальне зображення, ваше фото повинно знаходитися в директорії проекту <br>
                public/assets/files/img/ФОТО.<br>
                2. Вибравши через URL, посилання повинно спрямовувати напряму на фото.</h2></div>
                <select name="strategy">
                    <option value="local">Локальне зображення</option>
                    <option value="url">Зображення через URL</option>
                </select><br><br>

                <label>Введіть шлях до зображення або URL:</label><br>
                
                <a>Попробуйте <a style="color: green">https://pbs.twimg.com/media/GOrqFGla4AAtx1z.jpg</a></a><br><br>
                <input type="text" name="src" placeholder="Наприклад: files/img/Photo.jpg або https://..." required>
                <button type="submit">Завантажити</button>
            </form>

            <div class="result" style="margin-top:20px;">
                $imageHtml
            </div>
        </div>
        </body>
        </html>
        HTML;
    }
}
