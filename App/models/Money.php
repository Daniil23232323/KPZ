<?php

namespace App\models;

use App\interfaces\IMoney;

class Money implements IMoney
{
    private int $whole;
    private int $fraction;

    public function __construct(int $whole, int $fraction) {
        $this->setAmount($whole, $fraction);
    }

    public function setAmount(int $whole, int $fraction): void {
        $this->whole = $whole;
        $this->fraction = $fraction;
    }

    public function getAmount(): string {
        return sprintf("%d.%02d", $this->whole, $this->fraction);
    }
    function writeReport(string $content, Logger $logger): void {
        $path = __DIR__ . '/../../public/assets/files/report.txt';
        file_put_contents($path, $content);
        $logger->log("[ФАЙЛ] Звіт збережено у $path");
    }

}