<?php
namespace App\Task_1\views;

class LoggerView
{
    public function showForm(): void
    {
        echo <<<HTML
        <h2>Логування повідомлень</h2>
        <form method="post">
           <input type="hidden" name="task" value="1">
            <label>Тип логера:</label><br>
            <select name="target">
                <option value="console">Console браузера (вивід)</option>
                <option value="file">File (Текстовий файл)</option>
            </select><br><br>

            <label>Тип повідомлення:</label><br>
            <select name="type">
                <option value="log">Звичайне повідомлення</option>
                <option value="error">Помилка</option>
                <option value="warn">Попередження</option>
            </select><br><br>

            <label>Повідомлення:</label><br>
            <input type="text" name="message" required><br><br>

            <button type="submit">Записати лог</button>
        </form>
        HTML;
    }

    public function renderResult(string $message, string $target, $fileWriter): void
    {
        echo "<h3>Результат</h3>";
        echo "<p>$message</p>";
        echo "<p><strong>Записано в:</strong> " . ($target === 'file' ? 'Файл ' . $fileWriter->getPath() : 'Консоль (браузер)') . "</p>";

        echo "<a href='?task=1'>Назад</a>";
    }
}
