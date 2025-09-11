<?php
namespace App\Task_1\models;

use App\Task_1\interfaces\ILogger;

class Logger implements ILogger {
    public function log(string $message): void {
        echo "<p style='color:green;'>[LOG] $message</p>";
    }

    public function error(string $message): void {
        echo "<p style='color:red;'>[ERROR] $message</p>";
    }

    public function warn(string $message): void {
        echo "<p style='color:orange;'>[WARNING] $message</p>";
    }
}
