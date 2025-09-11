<?php

namespace App\Task_5_6\models;

class LightElementNode extends LightNode
{
    private string $tagName;
    private array $cssClasses = [];
    private array $children = [];
    private bool $selfClosing;

    public function __construct(string $tagName, bool $selfClosing = false)
    {
        $this->tagName = $tagName;
        $this->selfClosing = $selfClosing;
    }

    public function addClass(string $class): void
    {
        $this->cssClasses[] = $class;
    }

    public function appendChild(LightNode $child): void
    {
        $this->children[] = $child;
    }

    public function render(): string
    {
        $classAttr = empty($this->cssClasses) ? '' : ' class="' . implode(' ', $this->cssClasses) . '"';
        if ($this->selfClosing) {
            return "<{$this->tagName}{$classAttr} />";
        }

        $innerHTML = implode('', array_map(fn($child) => $child->render(), $this->children));
        return "<{$this->tagName}{$classAttr}>{$innerHTML}</{$this->tagName}>";
    }
}
