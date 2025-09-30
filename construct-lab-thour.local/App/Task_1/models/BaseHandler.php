<?php
namespace App\Task_1\models;

use App\Task_1\interfaces\HandlerInterface;

abstract class BaseHandler implements HandlerInterface {
    private ?HandlerInterface $nextHandler = null;

    public function setNext(HandlerInterface $handler): HandlerInterface {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle(string $request): ?string {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }
        return null;
    }
}
