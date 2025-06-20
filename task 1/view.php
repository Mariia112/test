<?php
// view.php

/**
 * @var array $dataPrepared - массив с отсортированными данными
 */

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Таблица оценок</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Сводная таблица оценок</h1>
    <table>
        <thead>
            <tr>
                <th>Ученик</th>
                <th>Предмет</th>
                <th>Сумма баллов</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataPrepared as $student => $subjects): ?>
                <?php foreach ($subjects as $subject => $sum): ?>
                    <tr>
                        <td><?= htmlspecialchars($student, ENT_QUOTES, 'UTF-8') ?></td>
                        <td><?= htmlspecialchars($subject, ENT_QUOTES, 'UTF-8') ?></td>
                        <td><?= (int)$sum ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>