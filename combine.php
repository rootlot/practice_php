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
        $value = 'World';

        $combined1 = 'Hello' . $value . '!';

        $combined2 = "Hello {$value} !";

        $combined3 = 'Hello';
        $combined3 .= $value;
        $combined3 .= '!';


    ?>
    <p><?=$combined1?></p>
    <p><?=$combined2?></p>
    <p><?=$combined3?></p>
</body>
</html>