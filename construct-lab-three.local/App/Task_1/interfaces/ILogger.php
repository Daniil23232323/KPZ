<?php
namespace App\Task_1\interfaces;

interface ILogger {
    public function log(string $message): void;
    public function error(string $message): void;
    public function warn(string $message): void;
}
