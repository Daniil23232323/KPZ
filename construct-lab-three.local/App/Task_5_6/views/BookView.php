<?php

namespace App\Task_5_6\views;

class BookView
{
    public function renderPage(string $content): void
    {
        echo <<<HTML
        <!DOCTYPE html>
        <html lang="uk">
        <head>
            <meta charset="UTF-8">
            <title>Книга</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <body>
            <div class="container mt-5">
                $content
            </div>
        </body>
        </html>
        HTML;
    }

    public function renderError(string $message): void
    {
        echo "<p style='color:red;'>$message</p>";
    }
}
