<?php

namespace App\Task_3\models\Renders;

use App\Task_3\models\interfaces\RendererInterface;

class RasterRenderer implements RendererInterface {
    public function render(string $shapeName): void {
        echo '<div style="image-rendering: pixelated;">';
        (new VectorRenderer())->render($shapeName); // Спрощено: перевикористання рендеру
        echo '</div>';
    }
}
