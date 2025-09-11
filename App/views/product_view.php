<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Звіт продуктів</title>
    <style>
        body {
            font-family: monospace, monospace;
            background: #f9f9f9;
            padding: 20px;
        }
        pre {
            background: #fff;
            border: 1px solid #ccc;
            padding: 15px;
            white-space: pre-wrap;
            word-wrap: break-word;
            max-width: 700px;
            margin: 0 auto;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
<h1>Логи та звіти</h1>

<pre><?= isset($logsHtml) ? $logsHtml : "⚠️ Логи поки що відсутні" ?></pre>

<p><a href="/public/assets/files/report.txt" download>⬇️ Завантажити report.txt</a></p>
</body>
</html>
