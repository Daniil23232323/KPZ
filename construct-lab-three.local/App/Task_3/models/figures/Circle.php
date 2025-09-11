<?php
namespace App\Task_3\models\figures;

use App\Task_3\models\Shape;

class Circle extends Shape {
    public function draw(): void {
        $this->renderer->render("Circle");
    }
}