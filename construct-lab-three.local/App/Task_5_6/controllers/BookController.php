<?php

namespace App\Task_5_6\controllers;

use App\Task_5_6\models\LightElementNode;
use App\Task_5_6\models\LightTextNode;
use App\Task_5_6\views\BookView;

class BookController
{
    public function handle(): void
    {
        $filePath = __DIR__ . '/../../../public/assets/files/Book.txt';

        if (!file_exists($filePath)) {
            (new BookView())->renderError("Файл Book.txt не знайдено.");
            return;
        }

        $lines = explode("\n", file_get_contents($filePath));
        $container = new LightElementNode('div');
        $container->addClass('container');

        foreach ($lines as $line) {
            $line = trim($line);
            if (empty($line)) continue;

            if (strlen($line) < 20) {
                $element = new LightElementNode('h2');
                $element->addClass('text-primary');
            } elseif (substr($line, 0, 1) === ' ') {
                $element = new LightElementNode('blockquote');
                $element->addClass('blockquote');
            } else {
                $element = new LightElementNode('p');
                $element->addClass('lead');
            }

            $element->appendChild(new LightTextNode($line));
            $container->appendChild($element);
        }

        (new BookView())->renderPage($container->render());
    }
}
