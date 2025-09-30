<?php
namespace App\Task_3\models;
class EventManager
{
    private $listeners = [];

    public function addListener($element, $event, callable $callback)
    {
        $element->addEventListener($event, $callback);
    }

    public function trigger($element, $event)
    {
        $element->triggerEvent($event);
    }
}

