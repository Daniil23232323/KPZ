<?php
namespace App\Task_3\views;

class ShapeView
{
    public function showForm(): void
    {
        echo "<h2>Оберіть фігуру та тип рендерера</h2>";
        echo <<<HTML
            <form method="get">
            <input type="hidden" name="task" value="3">
                <label>Фігура:</label>
                <select name="shape">
                    <option value="circle">circle</option>
                    <option value="square">square</option>
                    <option value="triangle">triangle</option>
                </select><br><br>
                
                <label>Рендерер:</label>
                <select name="renderer">
                    <option value="vector">vector</option>
                    <option value="raster">raster</option>
                </select><br><br>
                
                <button type="submit">Намалювати</button>
            </form>
        HTML;
    }

    public function renderResult(string $result): void
    {
        echo "<h3>Результат:</h3>";
        echo "<div style='text-align: center;'>$result</div>";
        echo "<br><a href='?task=3'>← Назад</a>";
    }

    public function showError(string $msg): void
    {
        echo "<p style='color:red;'>[Помилка] $msg</p>";
        echo "<a href='?'>← Назад</a>";
    }
}
