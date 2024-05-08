<?php
//連想配列
$food_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
//連想配列の値を出力する
foreach ($food_data as $key => $value) {
    echo "{$key} : {$value}<br>";
}
?>
