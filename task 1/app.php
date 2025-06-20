<?php

// app.php

require_once __DIR__ . '/logic.php';

$data = require __DIR__ . '/data.php';
$dataPrepared = prepareData($data);

require_once __DIR__ . '/view.php';
