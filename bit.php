<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bit</title>
</head>
<body>
    <?php
    define('BIT_RED', 1 << 0);
    define('BIT_BLUE', 1 << 1);
    define('BIT_YELLOW', 1 << 2);
    define('BIT_GREEN', 1 << 3);

    $colors = 0;

    $colors = BIT_BLUE | BIT_YELLOW;

    $statuses = [
        'red' => ($colors & BIT_RED) > 0,
        'blue' => ($colors & BIT_BLUE) > 0,
        'yellow' => ($colors & BIT_YELLOW) > 0,
        'green' => ($colors & BIT_GREEN) > 0
    ];
    ?>
    <p>赤のボタンはONですか？<?php var_dump($statuses['red']);?></p>
    <p>青のボタンはONですか？<?php var_dump($statuses['blue']);?></p>
    <p>黃のボタンはONですか？<?php var_dump($statuses['yellow']);?></p>
    <p>緑のボタンはONですか？<?php var_dump($statuses['green']);?></p>
</body>
</html>