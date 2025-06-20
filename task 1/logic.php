<?php

// logic.php

require_once __DIR__ . '/data.php';

/**
 * Группирует и суммирует баллы по ученикам и предметам.
 *
 * @param array $data
 * @return array
 */
function prepareData(array $data): array
{
    $result = [];

    foreach ($data as $row) {
        [$student, $subject, $grade] = $row;

        if (!isset($result[$student])) {
            $result[$student] = [];
        }

        if (!isset($result[$student][$subject])) {
            $result[$student][$subject] = 0;
        }

        // Суммируем баллы
        $result[$student][$subject] += $grade;
    }

    // Сортировка: сначала ученики, затем предметы
    ksort($result);
    foreach ($result as &$subjects) {
        ksort($subjects);
    }

    return $result;
}