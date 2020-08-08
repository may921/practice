<?php
// 標準入力でカンマ区切りのおみくじ結果データが入力
$input = trim(fgets(STDIN));
// カンマで分割して配列に代入
$array = explode(",",$input);
// ランダムの上限値を計算して変数に代入
$num = rand(0,count($array)-1);
// 配列の中身を出力
print_r($array);
// ランダム出力
echo $array[$num];
?>



<?php

while($input = trim(fgets(STDIN))){
    $array[] = $input;
}
print_r($array);
$num = rand(0,count($array)-1);
echo $array[$num];
?>