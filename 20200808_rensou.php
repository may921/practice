<?php
// 連想配列代入する値
// ショートソードを12個
// 銅の盾を4個
// 布の服を7個
$item =array("ショートソード" => 12,
             "銅の盾" => 4,
             "布の服" => 7
);
print_r($item);
?>




<?php
// 標準入力を３行取得
for($i=0 ; $i<3 ; $i++){
	$input = trim(fgets(STDIN));
	// 入力値を/で分割
	$key_value =explode("/", $input);
	// 手前の要素をkeyとして、後の要素をvalueとして連想配列に代入
	$key = $key_value[0];
	$value = $key_value[1];
	$team[$key] = $value;
}
// $team のkeyが戦士のvalueを出力
echo $team[$key = "戦士"];
?>



<?php
// 標準入力を３行取得
for($i=0 ; $i<3 ; $i++){
	$input = trim(fgets(STDIN));
	// 入力値を/で分割
	$key_value =explode("/", $input);
	// 手前の要素をkeyとして、後の要素をvalueとして連想配列に代入
	$key = $key_value[0];
	$value = $key_value[1];
	$team[$key] = $value;

}
// 配列 $team にkeyが「狩人」、valueが「鳥獣をとる猟師」という要素を追加
$team["狩人"] = "鳥獣をとる猟師";
print_r($team);

?>


<?php
// 標準入力を３行取得
for($i=0 ; $i<3 ; $i++){
	$input = trim(fgets(STDIN));
	// 入力値を/で分割
	$key_value =explode("/", $input);
	// 手前の要素をkeyとして、後の要素をvalueとして連想配列に代入
	$key = $key_value[0];
	$value = $key_value[1];
	$team[$key] = $value;

}
// $team のkeyが「木こり」のvalueを「木を切る職業」で上書きして、
//print_rで $team の内容を出力してみよう。
$team["木こり"] = "木を切る職業";
print_r($team);

?>



<?php
// 標準入力を３行取得
for($i=0 ; $i<3 ; $i++){
	$input = trim(fgets(STDIN));
	// 入力値を/で分割
	$key_value =explode("/", $input);
	// 手前の要素をkeyとして、後の要素をvalueとして連想配列に代入
	$key = $key_value[0];
	$value = $key_value[1];
	$team[$key] = $value;

}
// $team のkeyが「スライム」の要素を削除して
// print_rで $team の内容を出力してみよう。
unset($team["スライム"]);
print_r($team);

?>



<?php
$item = array("02:戦士", "01:勇者", "04:魔法使い", "03:僧侶");
// 小さい順に並び替えて、print_rで出力
sort($item);
print_r($item);

?>



<?php
$item = array("02:戦士", "01:勇者", "04:魔法使い", "03:僧侶");
// 大きい順に並び替えて、print_rで出力
rsort($item);
print_r($item);

?>


<?php
//データを取得して並べ替えて出力
while($input = fgets(STDIN)){
    $team[] = trim($input);
}
sort($team);
print_r($team);
?>



<?php
//カンマ[,] で分割して攻撃力が高い順に並び替えて print_r で出力
$input = trim(fgets(STDIN));

$team = explode(",",$input);

rsort($team);
print_r($team);

?>


<?php
//連想配列 $item の value を大きい順に並び替え
$item = array(
	"ショートソード" => "攻撃力:23",
	"バスタードソード" => "攻撃力:45",
	"ロングソード" => "攻撃力:34",
	"ダガー" => "攻撃力:10"
);
arsort($item);
print_r($item);

?>



<?php
//連想配列 $rank の value を順位順（１位、２位、、）に並び替え
$rank = array(
	"はぐれ犬" => "2位",
	"オオカミ" => "4位",
	"スライム" => "1位",
	"ゴブリン" => "3位"
);
asort($rank);
print_r($rank);
?>




<?php
$item = array(
	"オリハルコンブレード" => "所持数:2",
	"イージスシールド" => "所持数:3",
	"アースブレイカー" => "所持数:1",
	"エビルソード" => "所持数:1",
	"ウインドスピア" => "所持数:1"
);
ksort($item);
print_r($item);
?>


<?php
$item = array(
	"オリハルコンブレード" => "所持数:2",
	"イージスシールド" => "所持数:3",
	"アースブレイカー" => "所持数:1",
	"エビルソード" => "所持数:1",
	"ウインドスピア" => "所持数:1"
);
krsort($item);
print_r($item);
?>




<?php
while($input = trim(fgets(STDIN))){
    $key_value = explode(",",$input);
    $key = $key_value[0];
	$value = $key_value[1];
    $item[$key] = $value;
}
arsort($item);
print_r($item);

?>
