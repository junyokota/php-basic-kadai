<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php


        //ソートする配列
        $array = [15, 4, 18, 23, 10 ];

         
        //$array：ソート対象の配列
        //$order：ソート方向
        //ソート関数を定義する
        function sort_2way($array, $order) {

        if($order == true) {//TRUE：昇順
            echo '昇順にソートします。<br>';
            sort($array);
        } else{
            echo '降順にソートします。<br>';
            rsort($array);
        }

        foreach ($array as $val) {
            echo $val . '<br>';
        }
     }
     
        //ソート（昇順）関数を呼び出し
        sort_2way($array, true);


        //ソート（降順）関数を呼び出し
        sort_2way($array, false);
        ?>
    </p>
</body>

</html>
