<?php
$item = array("ショートソード", "ロングソード", "ブレードソード", "バスタードソード");
// foreach ループで $item 配列の value 全てを一つずつ出力
foreach($item as $value){
    echo $value."\n";
}

?>


<?php
$input = trim(fgets(STDIN));
$array = explode(",", $input);

// ここから下に記述　
// $array の value に代入されている
// 全ての数値の合計を出力してみましょう。
$sum = 0;
foreach ($array as $value) {
    $sum = $sum + $value;
}
echo $sum;
?>



<?php
$input = trim(fgets(STDIN));
$array = explode(",", $input);

// ここから下に記述　
// 配列のvalueに「勇者」が何回出現するか数えて
// 出現数を数字で出力してください。
$num = 0;
foreach ($array as $value) {
    if($value == "勇者"){
        $num++;
    }
}
echo $num;
?>



<?php
$item = array(
	"ショートソード" => 2000,
	"ロングソード" => 5000,
	"鉄の盾" => 1600,
	"鎖かたびら" => 2800
);

// ここから下に記述
foreach ($item as $key => $value) {
    echo $key."は".$value."円です。\n";
}
?>


<?php
// 標準入力から値をループで取得
while($input = trim(fgets(STDIN))){
	// カンマで分割
	$key_value = explode(",", $input);
	$key = $key_value[0];
	$value = $key_value[1];
	// 連想配列として$itemに代入
	$item[$key] = $value;
}
// ここから下に記述
// 2000円以下の商品を価格が高い方から順に並べ替えて
// print_rで出力するプログラムを書いてみましょう。
arsort($item);
foreach ($item as $key => $value) {
    if($value <= 2000){
		$item_list[$key] = $value;
    }
}
print_r($item_list);
?>




<?php
// 標準入力から値をループで取得
while($input = trim(fgets(STDIN))){
	// カンマで分割
	$key_value = explode(",", $input);
	$key = $key_value[0];
	$value = $key_value[1];
	// 連想配列として$itemに代入
	$result[$key] = $value;
}
// ここから下に記述
// 得点が高い順番に並び替え、print_rで出力後、
// 勇者が何位なのか数字で出力してみましょう。
arsort($result);
print_r($result);

$num = 1;
foreach ($result as $key => $value) {
    if($key == "勇者"){
        echo $num;
    }
    $num++;
}
?>
