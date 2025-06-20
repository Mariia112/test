<?php
// app.php

require_once __DIR__ . '/condition.php';

// Пример входных данных
$n = isset($_GET['n']) ? (int) $_GET['n'] : 0;
$m = isset($_GET['m']) ? (int) $_GET['m'] : 0;

$result = getSistersOfBrother($n, $m);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Братья и сёстры Алисы</title>
</head>
<body>
    <h1>Результат</h1>
    <?php if ($result !== null): ?>
        <p>У любого брата Алисы <strong><?= $result ?></strong> сёстры.</p>
    <?php else: ?>
        <p>Ошибка: Введите корректные значения n и m.</p>
    <?php endif; ?>
</body>
</html>