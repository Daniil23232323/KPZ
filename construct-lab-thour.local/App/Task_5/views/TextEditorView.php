<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Text Editor</title>
    <link rel="stylesheet" href="/public/assets/styles/styles.css">
</head>
<body>
<div class="container">
    <h2>Text Editor з Memento</h2>

    <?php if (!empty($message)): ?>
        <p class="message"><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>

    <form method="post">
        <textarea name="text" rows="10" cols="50"><?= htmlspecialchars($text) ?></textarea><br><br>
        <button type="submit" name="save">Зберегти стан</button>
        <button type="submit" name="restore">Відновити попередній стан</button>
    </form>

    <h3>Поточний текст:</h3>
    <div class="output"><?= nl2br(htmlspecialchars($text)) ?></div>
</div>
</body>
</html>
