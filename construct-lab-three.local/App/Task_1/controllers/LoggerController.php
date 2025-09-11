<?php
namespace App\Task_1\controllers;

use App\Task_1\models\Logger;
use App\Task_1\models\FileWriter;
use App\Task_1\models\FileLoggerAdapter;
use App\Task_1\views\LoggerView;

class LoggerController
{
    public function handle(): void
    {
        $view = new LoggerView();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $target = $_POST['target'] ?? 'console';
            $type = $_POST['type'] ?? 'log';
            $message = $_POST['message'] ?? '';

            if ($target === 'console') {
                $logger = new Logger();
            } else {
                $fileWriter = new FileWriter(__DIR__ . '/../../../public/assets/logs/log.txt');
                $logger = new FileLoggerAdapter($fileWriter);
            }

            switch ($type) {
                case 'log':
                    $logger->log($message);
                    break;
                case 'error':
                    $logger->error($message);
                    break;
                case 'warn':
                    $logger->warn($message);
                    break;
            }

            $view->renderResult("Лог записано: [$type] $message", $target, $fileWriter);
        } else {
            $view->showForm();
        }
    }
}
