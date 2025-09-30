<?php
namespace App\Task_3\interfaces;
interface EventListenerInterface
{
    public function addEventListener($event, callable $callback);

    public function triggerEvent($event);
}

