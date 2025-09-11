<?php

namespace App\Task_2\views;

use App\Task_2\interfaces\Device;

class DeviceView
{
    public function printError(string $msg): void
    {
        echo "<p style='color:red;'>[ERROR] {$msg}</p>";
    }

    public function render(Device $device): void
    {
        echo "<h2>Інформація про пристрій</h2>";
        echo "<ul>";
        echo "<li><strong>Бренд:</strong> {$device->getBrand()}</li>";
        echo "<li><strong>Тип:</strong> {$device->getType()}</li>";
        echo "<li><strong>Характеристики:</strong> {$device->getSpecs()}</li>";
        echo "</ul>";
        echo "<a href='/?task=2'>Повернутись</a>";
    }

    public function showForm(): void
    {
        echo <<<HTML
            <h2>Оберіть бренд і тип пристрою</h2>
            <form method="get">
                <input type="hidden" name="task" value="2">

                <label for="brand">Бренд:</label>
                <select name="brand" id="brand">
                    <option value="Galaxy">Galaxy</option>
                    <option value="IPhone">IPhone</option>
                    <option value="Xiaomi">Xiaomi</option>
                </select><br><br>

                <label for="device">Тип пристрою:</label>
                <select name="device" id="device">
                    <option value="Laptop">Laptop</option>
                    <option value="Netbook">Netbook</option>
                    <option value="EBook">EBook</option>
                    <option value="Smartphone">Smartphone</option>
                </select><br><br>

                <button type="submit">Створити</button>
            </form>
        HTML;
    }
}
