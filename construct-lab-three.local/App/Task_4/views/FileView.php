<?php

namespace App\Task_4\views;

class FileView
{
    public function showForm(): void
    {
        echo "<h2>Оберіть файл для читання</h2>";
        echo "<form method='get'>";
        echo "<input type='hidden' name='task' value='4'>";
        echo "<select name='file'>";
        echo "<option value='allowed_file.csv'>allowed_file.csv</option>";
        echo "<option value='restricted_file.txt'>restricted_file.txt</option>";
        echo "</select><br><br>";
        echo "<button type='submit'>Читати файл</button>";
        echo "</form>";
    }

    public function renderResult(string $filename, array $data): void
    {
        echo "<h3>Результат читання файлу: $filename</h3>";
        if (empty($data)) {
            echo "<p><em>Файл пустий або доступ заборонено.</em></p>";
        } else {
            echo "<pre>";
            foreach ($data as $line) {
                echo htmlspecialchars(implode('', $line)) . PHP_EOL;
            }
            echo "</pre>";
        }
        echo "<br><a href='?task=4'>← Назад</a>";
    }
}
