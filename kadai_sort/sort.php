<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $nums = [15, 4, 18, 23, 10 ];
        echo '昇順に出力します。';
        echo '<br>';
        sort($nums);
       foreach( $nums as $num){
        echo $num . '<br>';
       }

        echo '<br>';

        echo '降順に出力します。';
        echo '<br>';
        rsort($nums);
foreach( $nums as $num){
        echo $num . '<br>';
       }
        ?>
    </p>
</body>

</html>