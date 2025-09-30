<?php
namespace App\Task_5\controllers;

use App\Task_5\models\TextDocument;
use App\Task_5\models\Caretaker;

class TextEditorController
{
    private TextDocument $document;
    private Caretaker $caretaker;

    public function __construct()
    {
        $this->document = new TextDocument();
        $this->caretaker = new Caretaker();
    }

    public function handle(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['save'])) {
                $this->document->setText($_POST['text'] ?? '');
                $this->caretaker->saveMemento($this->document->createMemento());
                $message = "💾 Текст збережено!";
            }

            if (isset($_POST['restore'])) {
                $memento = $this->caretaker->restoreMemento();
                if ($memento) {
                    $this->document->restoreMemento($memento);
                    $message = "🔄 Попередній стан відновлено!";
                } else {
                    $message = "⚠️ Немає збережених станів!";
                }
            }
        }

        $text = $this->document->getText();

        // Підключаємо view
        require __DIR__ . '/../views/TextEditorView.php';
    }
}
