<?php

namespace App\Task_3\models\Renders;

use App\Task_3\models\interfaces\RendererInterface;

class VectorRenderer implements RendererInterface {
    public function render(string $shapeName): void {
        switch (strtolower($shapeName)) {
            case 'circle':
                echo '<div style="
                    width: 100px;
                    height: 100px;
                    border-radius: 50%;
                    background-color: #4caf50;
                    margin: 20px auto;
                    border: 2px solid #333;
                " title="Vector Circle"></div>';
                break;
            case 'square':
                echo '<div style="
                    width: 100px;
                    height: 100px;
                    background-color: #2196f3;
                    margin: 20px auto;
                    border: 2px solid #333;
                " title="Vector Square"></div>';
                break;
            case 'triangle':
                echo '<div style="
                    width: 0;
                    height: 0;
                    border-left: 50px solid transparent;
                    border-right: 50px solid transparent;
                    border-bottom: 100px solid #f44336;
                    margin: 20px auto;
                " title="Vector Triangle"></div>';
                break;
            default:
                echo "<p>Unknown shape: $shapeName</p>";
        }
    }
}
