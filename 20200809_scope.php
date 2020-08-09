<?php
// グローバル変数
$message = "paiza";

function say_hello($message){
    //ローカル変数
    echo "hello ".$message;
}
say_hello($message);
?>


<?php
// RPGの攻撃シーン

//攻撃
function attack($person){
    echo $person."はスライムを攻撃した\n";
}

//HP表示
function output_ememy_hp($enemy_hp){
    echo "敵のHPは残り".$enemy_hp."です\n";
}

//敵の最初の体力
$enemy_hp = trim(fgets(STDIN));
$team = array("勇者" => 200, "戦士" => 150, "魔法使い" => 100);
foreach ($team as $person => $power) {

    //攻撃
    attack($person);
    //HP計算
    $enemy_hp = $enemy_hp-$power;
    //HP表示
    output_ememy_hp($enemy_hp);
}

?>


<?php
// 引数のデフォルト値

//引数が無い時はpaizaがはいる
function say_hello($target = "paiza"){
    echo "hello ".$target;
}

// 関数呼び出し
say_hello();　　　　   //hello paiza
say_hello("ハロー");  //helloハロー
?>

