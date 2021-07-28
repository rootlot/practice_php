<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //整数型
        $integerValue = 10;

        //小数
        $floatValue = 12.34;

        //文字列型
        $stringValue = '文字列型1';

        // 文字列型２
        $stringValue2 = "文字列型2";

        // 真偽値型
        $boolValue = true;

        // null
        $nullValue = null;

        // 空文字（文字列型）
        $emptyStringValue = '';
    ?>
    <p>整数：<?php echo $integerValue?></p>
    <p>小数：<?php echo $floatValue?></p>
    <p>文字列１：<?php echo $stringValue?></p>
    <p>文字列２：<?php echo $stringValue2?></p>
    <p>真偽値：<?php echo $boolValue?></p>
    <p>null値：<?php echo $nullValue?></p>
    <p>文字列3（空文字）：<?php echo $emptyStringValue?></p>
</body>
</html>