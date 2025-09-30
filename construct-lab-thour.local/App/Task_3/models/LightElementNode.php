<?php

namespace App\Task_3\models;

use App\Task_3\models\LightNode;
use App\Task_3\interfaces\EventListenerInterface;

class LightElementNode extends LightNode implements EventListenerInterface
{
    private $tagName;
    private $displayType;
    private $isSelfClosing;
    private $cssClasses = [];
    private $events = [];

    public function __construct($tagName, $displayType, $isSelfClosing = false)
    {
        $this->tagName = $tagName;
        $this->displayType = $displayType;
        $this->isSelfClosing = $isSelfClosing;
    }

    public function addClass($className)
    {
        $this->cssClasses[] = $className;
    }

    public function renderOuterHTML()
    {
        $classes = !empty($this->cssClasses) ? ' class="' . implode(' ', $this->cssClasses) . '"' : '';
        $selfClosing = $this->isSelfClosing ? ' /' : '';
        $html = "<{$this->tagName}{$classes}{$selfClosing}>";
        foreach ($this->children as $child) {
            $html .= $child->renderOuterHTML();
        }
        if (!$this->isSelfClosing) {
            $html .= "</{$this->tagName}>";
        }
        return $html;
    }

    public function renderInnerHTML()
    {
        $innerHTML = '';
        foreach ($this->children as $child) {
            $innerHTML .= $child->renderInnerHTML();
        }
        return $innerHTML;
    }

    public function addEventListener($event, callable $callback)
    {
        $this->events[$event][] = $callback;
    }

    public function triggerEvent($event)
    {
        if (isset($this->events[$event])) {
            foreach ($this->events[$event] as $callback) {
                call_user_func($callback);
            }
        }
    }
}

