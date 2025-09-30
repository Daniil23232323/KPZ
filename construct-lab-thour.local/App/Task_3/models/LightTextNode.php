<?php

namespace App\Task_3\models;
use App\Task_3\models\LightNode;

class LightTextNode extends LightNode
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function renderOuterHTML()
    {
        return $this->renderInnerHTML();
    }

    public function renderInnerHTML()
    {
        return htmlspecialchars($this->text);
    }
}

