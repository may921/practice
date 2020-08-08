<?php
//変数を配列に格納する
$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN)); 
$c = trim(fgets(STDIN));

$team = array($a, $b, $c);

//配列の中身を全てだす  デバッグで利用多し
print_r($team);
?>



<?php
//配列の中からひとつだけ出力
// 標準入力から５行分の入力を配列に代入する
for($i=0; $i < 5; $i++){
    $team[] = trim(fgets(STDIN));
}

echo $team[2];
?>



<?php
//配列に追加する
for($i=0; $i < 3; $i++){
    $team[] = trim(fgets(STDIN));
}

$team[] = "狩人";

print_r($team);
?>



<?php

for($i=0; $i < 4; $i++){
    $team[] = trim(fgets(STDIN));
}
// 配列の中身を上書きする
$team[1] = "木こり";
print_r($team);

?>



<?php
for($i=0; $i < 3; $i++){
    $team[] = trim(fgets(STDIN));
}
// 配列の特定の要素を削除
unset($team[0]);
print_r($team);

?>
