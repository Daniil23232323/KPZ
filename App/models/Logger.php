<?php

namespace App\models;

class Logger
{
    private array $logs = [];
    private string $reportFile;

    public function __construct(string $reportFile = __DIR__ . '/../../public/assets/files/report.txt')
    {
        $this->reportFile = $reportFile;
    }

    public function log(string $message): void
    {
        $this->logs[] = "[" . date('Y-m-d H:i:s') . "] " . $message;
    }


    public function getLogs(): string
    {
        return implode("\n", $this->logs);
    }

    public function saveReport(): void
    {
        file_put_contents($this->reportFile, $this->getLogs());
    }
}
