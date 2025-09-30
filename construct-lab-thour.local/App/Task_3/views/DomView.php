<?php
namespace App\Task_3\views;

use App\Task_3\models\LightElementNode;

class DomView
{
    public function render(LightElementNode $root, string $message = ''): void
    {
        $html = $root->renderOuterHTML();

        echo <<<HTML
        <!DOCTYPE html>
        <html lang="uk">
        <head>
            <meta charset="UTF-8">
            <title>Light DOM Book</title>
            <link rel="stylesheet" href="/public/assets/styles/styles.css">
        </head>
        <body>
        <div class="container">
            {$html}
            <form method="post">
                <input type="hidden" name="saveHtml" value="1">
                <button type="submit">Зберегти HTML у book.html</button>
            </form>
            <div style="margin-top:20px;color:green;">{$message}</div>
        </div>
        </body>
        </html>
        HTML;
    }
}
