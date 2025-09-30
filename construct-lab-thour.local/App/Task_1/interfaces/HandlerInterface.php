<?php
namespace App\Task_1\interfaces;

interface HandlerInterface {
    public function setNext(HandlerInterface $handler): HandlerInterface;
    public function handle(string $request): ?string;
}
