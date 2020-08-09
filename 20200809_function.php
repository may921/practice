<?php
// 関数を呼び出してみよう

function say_hello(){
    echo "hello paiza";
}

// この下に関数呼び出しを記述する
say_hello();
?>



<?php
// 掛け算関数を呼び出してみよう

function multiply($x, $y){
    return $x * $y;
}


// この下に関数呼び出しを記述する
$sum = multiply(3,4);
echo $sum;
?>



<?php
// 掛け算関数を作成してみよう

function multiply($x, $y){
    // この下に処理を記述する
    return $x*$y."\n";

}

echo multiply(3, 4);
echo multiply(5, 7);
echo multiply(12, 34);
?>




<?php
// 九九の表を作成してみよう
function multiply($x, $y){
    return $x * $y;
}
for ($num2 = 1; $num2 <= 9; $num2++) {
for ($num = 0; $num < 9; $num++) {
    echo multiply($num2, $num + 1);
    if ($num < 8) {
        echo " ";
    }
}

echo "\n";
}


?>
