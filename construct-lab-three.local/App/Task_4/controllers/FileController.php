<?php

namespace App\Task_4\controllers;

use App\Task_4\models\readers\SmartTextReader;
use App\Task_4\models\readers\SmartTextChecker;
use App\Task_4\models\readers\SmartTextReaderLocker;
use App\Task_4\views\FileView;

class FileController
{
    public function handle(): void
    {
        $view = new FileView();

        if (!isset($_GET['file'])) {
            $view->showForm();
            return;
        }

        $filename = basename($_GET['file']);
        $filePath = __DIR__ . '/../../../public/assets/files/' . $filename;

        $realReader = new SmartTextReader();
        $loggedReader = new SmartTextChecker($realReader);
        $restrictedReader = new SmartTextReaderLocker($loggedReader, '/\\.txt$/');

        $data = $restrictedReader->readFile($filePath);

        $view->renderResult($filename, $data);
    }
}
