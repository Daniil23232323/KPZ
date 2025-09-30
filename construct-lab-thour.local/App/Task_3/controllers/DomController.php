<?php
namespace App\Task_3\controllers;

use App\Task_3\models\LightElementNode;
use App\Task_3\models\LightTextNode;
use App\Task_3\views\DomView;

class DomController
{
    private DomView $view;
    private string $txtFile;
    private string $htmlFile;

    public function __construct()
    {
        $this->view = new DomView();
        $this->txtFile = __DIR__ . '/../../../public/assets/files/book.txt';
        $this->htmlFile = __DIR__ . '/../../../public/assets/files/book.html';
    }

    public function handle(): void
    {
        $text = file_exists($this->txtFile) ? file_get_contents($this->txtFile) : "Файл не знайдено";

        // Функція конвертації тексту в HTML
        $htmlContent = $this->convertTextToNodes($text);

        // Створюємо кореневий div
        $root = new LightElementNode('div', 'block');
        $root->addClass('container');

        $heading = new LightElementNode('h2', 'block');
        $heading->addChild(new LightTextNode('Light DOM з файлу book.txt'));
        $root->addChild($heading);

        $root->addChild($htmlContent);

        // Якщо натиснули кнопку зберегти
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['saveHtml'])) {
            $fullHtml = "<!DOCTYPE html>\n<html lang='uk'>\n<head>\n<meta charset='UTF-8'>\n<title>Book</title>\n</head>\n<body>\n";
            $fullHtml .= $root->renderOuterHTML();
            $fullHtml .= "\n</body>\n</html>";

            file_put_contents($this->htmlFile, $fullHtml);
            $this->view->render($root, "HTML збережено у book.html");
        } else {
            $this->view->render($root);
        }
    }

    private function convertTextToNodes(string $text): LightElementNode
    {
        $container = new LightElementNode('div', 'block');

        $lines = explode("\n", $text);
        foreach ($lines as $line) {
            $line = trim($line);
            if (strlen($line) < 20) {
                $node = new LightElementNode('h2', 'block');
            } elseif (strpos($line, ' ') === 0) {
                $node = new LightElementNode('blockquote', 'block');
            } else {
                $node = new LightElementNode('p', 'block');
            }
            $node->addChild(new LightTextNode($line));
            $container->addChild($node);
        }

        return $container;
    }
}
