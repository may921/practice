<?php
//西暦年と昭和年の対応表を出力するプログラム
//昭和1年（西暦1926年）から昭和64年（西暦1989年）

for($sei=1926; $sei<=1989; $sei++){
    
    $syo = $sei-1925;
    echo "西暦".$sei."年は、昭和".$syo."年です。\n";
}
?>

<?php
$input1 = trim(fgets(STDIN));
$input2 = trim(fgets(STDIN));
$max = $input1 + $input2;
for($input1; $input1<$max; $input1++){
    $syo = $input1 - 1925;
    echo "西暦".$input1."年は、昭和".$syo."年です。\n";
}
?>