<?php
// explode関数を使い、カンマ等で区切られた
//文字列を分割して配列に代入する
$input = trim(fgets(STDIN));
// $inputの文字列を分割してみよう！
$string = explode("/",$input);
print_r($string);
?>



<?php
//<>ごとに区切る
$input = trim(fgets(STDIN));

$string = explode("<>",$input);
print_r($string);
?>



<?php
//いくつに区切ったか、配列がいくつあるかカウントする
$input = trim(fgets(STDIN));

$string = explode(",",$input);

$num = count($string);
echo $num;
?>



<?php
// 配列の中身を1行づつ表示
$input = trim(fgets(STDIN));
// explodeで$inputの文字列を分割し$arrayに配列として代入
$array = explode(",", $input);
// $arrayの要素数を数えて$numに代入
$num = count($array);
// $numの数だけループして$arrayから要素を一つづつ取り出す

for($a = 0; $a < $num; $a++){
    echo $array[$a]."\n";
}

?>


<<?php

$input = trim(fgets(STDIN));

$string = explode(",",$input);
$num = count($string);

for($a=0; $a<$num; $a++){
    echo $string[$a]."さん\n";
}


?>

<?php
// 標準入力から1行データを取得
$input = trim(fgets(STDIN));
// $inputの値が空で無ければループする
while($input){
    // 配列に$inputの値を追加
$array[] = $input;
    // 標準入力から1行データを取得
$input = trim(fgets(STDIN));
}
print_r($array);
?>



<?php
// 標準入力から1行データを取得
$input = trim(fgets(STDIN));
// $inputの値が空で無ければループする
while($input){
    // 配列に$inputの値を追加
    // 標準入力から1行データを取得
    echo $input."さん\n";
    $input = trim(fgets(STDIN));
}

?>



<?php
// 勇者が何回登場したかを整数で出力
$input = trim(fgets(STDIN));
// $inputの値が空で無ければループする
while($input){
    // 配列に$inputの値を追加
    if($input == "勇者"){
        $array[] = $input;
    }
    $input = trim(fgets(STDIN)); 
}
$num = count($array);
echo $num;

?>




<?php
// 標準入力で途中に空行が有った場合でも、最終行まで取得する
$input = fgets(STDIN);
// $inputの値が空で無ければループする
while($input){
    // 配列に$inputの値を追加
    $array[] = trim($input);
    // 標準入力から1行データを取得
    $input = fgets(STDIN);
}
print_r($array);

?>



<?php
// 標準入力の空行も含む全ての行の値を配列に代入する
$input = fgets(STDIN);
while($input){
    $array[] = trim($input);
    $input = fgets(STDIN); 
}
// 配列の値を出力
print_r($array);

?>



<?php
// 標準入力から1行取得し値があればループ
while($input = fgets(STDIN)){
    // 配列に$inputの値を追加
    $input = trim($input);
    if($input == "勇者"){
        $array[] = $input;
    }
}
echo count($array);

?>







