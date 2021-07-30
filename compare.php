<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>浮動小数点を比較する</title>
</head>
<body>
    <?php
    /* 以下は、abs関数を用いた比較 */
    $a = 1.2340;
    $b = 1.2345;

    // 小数部1桁目までが等しければ等しいとみなす。結果：true
    var_dump(abs($a - $b) < 0.1);

    // 小数部2桁目までが等しければ等しいとみなす。結果：true
    var_dump(abs($a - $b) < 0.01);

    // 小数部3桁目までが等しければ等しいとみなす。結果：true
    var_dump(abs($a - $b) < 0.001);

    // 小数部4桁目までが等しければ等しいとみなす。結果：false
    var_dump(abs($a - $b) < 0.0001);

    // 小数部5桁目までが等しければ等しいとみなす。結果：false
    var_dump(abs($a - $b) < 0.00001);

    /* 以下は、bccomp関数を用いた比較 */
    $c = '1.2340';
    $d = '1.2345';

    // 小数部1桁目までが等しければ等しいとみなす。結果：0
    var_dump(bccomp($c, $d, 1));

    // 小数部2桁目までが等しければ等しいとみなす。結果：0
    var_dump(bccomp($c, $d, 2));

    // 小数部3桁目までが等しければ等しいとみなす。結果：0
    var_dump(bccomp($c, $d, 3));

    // 小数部4桁目までが等しければ等しいとみなす。結果：-1
    var_dump(bccomp($c, $d, 4));

    // 小数部5桁目までが等しければ等しいとみなす。結果：-1
    var_dump(bccomp($c, $d, 5));
    ?>
</body>
</html>