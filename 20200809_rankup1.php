<?php
    //STEP: 1 単純な入出力
    $input_line = fgets(STDIN);
    echo "$input_line";
?>

<?php
    // STEP: 2 複数行にわたる出力

    $input_line = fgets(STDIN);
    for($a=1; $a <= $input_line; $a++){
        echo "paiza\n";
    }
?>


<?php
    //STEP: 3 複数行にわたる入力

    $input_line = trim(fgets(STDIN));
    for($a=0; $a<$input_line;$a++){
        $input = trim(fgets(STDIN));
        echo $input."\n";
    }
?>


<?php
    // STEP: 4 入力の配列による保持

    
    $input_line = trim(fgets(STDIN));
    for($a=0; $a <$input_line; $a++){
        $input = trim(fgets(STDIN));
        $array[] = $input;
    }
    rsort($array);
    echo $array[0];
?>



<?php
    //STEP: 5 半角スペース区切りでの出力

    $input_line = fgets(STDIN);
    for($a=1; $a<$input_line; $a++){
        echo "paiza ";
    }
    echo "paiza\n";
?>


<?php
    //STEP: 6 改行区切りでの出力

    $input_line = trim(fgets(STDIN));
    $input = trim(fgets(STDIN));
    $array = explode(" ",$input);
    for($a=0; $a<$input_line; $a++){
        
        echo $array[$a]."\n";
    }
    
    
?>


<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $input_line = trim(fgets(STDIN));
    
    for($a=0; $a<$input_line; $a++){
        $input = trim(fgets(STDIN));
        $array = explode(" ", $input);
        $array[1]=$array[1]+1;
        echo $array[0]." ".$array[1]."\n";
    }
?>




<?php
    //STEP: 8 整数と文字列

    $input_line = trim(fgets(STDIN));
    for($a=0; $a<$input_line;$a++){
        $input = trim(fgets(STDIN));

        //長さを調べる
        $num = strlen($input);
        echo $num."\n";
        
    }
?>


<?php
    //STEP: 9 部分文字列

    $input1 = trim(fgets(STDIN));
    $input2 = trim(fgets(STDIN));
    if(strpos($input2,$input1) !== false ){
        echo "YES";
    }else{
        echo "NO";
    }
?>



<?php
    //STEP: 10 数字の文字列操作（基本）

    $input = fgets(STDIN);
    $str1 = substr($input, 0, 1);
    $str2 = substr($input, 1, 1);
    $str3 = substr($input, 2, 1);
    $str4 = substr($input, 3, 1);
    $num1 = $str1+$str4;
    $num2 = $str2+$str3;
    echo $num1.$num2;
?>



<?php
    //STEP: 11 数字の文字列操作（0埋め）
    $input = fgets(STDIN);
    $num = strlen($input);
    if($num==1){
        echo "00".$input;
    }elseif ($num==2) {
        echo "0".$input;
    }else{
        echo $input;
    }
?>



<?php
    //STEP: 12 数字の文字列操作（時刻1）

    $input = fgets(STDIN);
    $num1 = substr($input,0,1);
    $num2 = substr($input,1,1);
    $num3 = substr($input,3,1);
    $num4 = substr($input,4,1);
    if($num1 !== "0"){
        echo $num1;
    }
    echo $num2."\n";
    if($num3 !== "0"){
        echo $num3;
    }
    echo $num4."\n";
?>



<?php
    //STEP: 13 数字の文字列操作（時刻2）

    $input = fgets(STDIN);
    $num1 = substr($input,0,1);
    $num2 = substr($input,1,1);
    $num3 = substr($input,2,1);
    $num4 = substr($input,3,1);
    $num5 = substr($input,4,1);
    
    if($num4+3>5){
        $num4 = $num4+3-6;
        $num2++;
        if($num2==10 || $num2==20){
            $num2 = 0;
            $num1++;
            
        }
    }else{
        $num4 = $num4+3;
    }
    

    echo $num1.$num2.$num3.$num4.$num5;
?>



<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $input = trim(fgets(STDIN));
    //$input=1;
    for($a=0; $a<$input; $a++){
        $str = trim(fgets(STDIN));
        //$str = "15:59 2 21";
        $array = explode(" ",$str);
        $mnum = substr($array[0],3,2);
        $hnum = substr($array[0],0,2);
        
        if($array[2] !== 0){
            $mnum = $mnum+$array[2];
            if($mnum>59){
                $mnum = $mnum-60;
                $hnum++;
            }
            if($mnum==0){
                $mnum = "00";
            }
            if(strlen($mnum)==1){
                $mnum = "0".$mnum;
            }
        }
        if($array[1] !== 0){
            $hnum = $hnum+$array[1];
            if($hnum>23){
                $hnum = $hnum-24;
            }
            if($hnum==0){
                $hnum = "00";
            }
            if(strlen($hnum)==1){
                $hnum = "0".$hnum;
            }
        }
        echo $hnum.":".$mnum."\n";
    }
    
?>



<?php
    // STEP: 15 3の倍数のカウント

    $input = trim(fgets(STDIN));
    $str = trim(fgets(STDIN));
    $array = explode(" ",$str);
    $num = 0;
    for($a=0; $a<$input; $a++){
        if($array[$a]%3==0){
            $num++;
        }
    }
    echo $num;
?>


<?php
    // STEP: 16 フラグ管理

    $input_line = trim(fgets(STDIN));
    $b = 0;
    for($a=0;$a<$input_line;$a++){
        $input = trim(fgets(STDIN));
        if($input==7){
            $b++;
        }
    }
    if($b==0){
        echo "NO";
    }else{
        echo "YES";
    }
?>


<?php
    //STEP: 17 インデックス取得

    $input_line = trim(fgets(STDIN));
    for($a=0;$a<$input_line;$a++){
        $input = trim(fgets(STDIN));
        $array[] = $input;
    }
    $input = trim(fgets(STDIN));
    $b = 0;
    
    for($a=0;$a<$input_line;$a++){
        if($array[$a]==$input){
            $array2[] = $a+1;
        }
    }
    echo $array2[0];
?>



<?php
    // STEP: 18 多重ループ

    $input_line1 = trim(fgets(STDIN));
    for($a=0;$a<$input_line1;$a++){
        $input = trim(fgets(STDIN));
        $array1[] = $input;
    }
    
    $input_line2 = trim(fgets(STDIN));
    for($a=0;$a<$input_line2;$a++){
        $input = trim(fgets(STDIN));
        $array2[] = $input;
    }
    
    for($a=0;$a<$input_line1;$a++){
        for($b=0;$b<$input_line2;$b++){
           if(strpos($array2[$b], $array1[$a]) !== false) {
                echo "YES\n";
            } else {
             echo "NO\n";
            } 
        }
    
    }
?>



<?php
    // forループ

    $input_line = trim(fgets(STDIN));
    $array1 = explode(" ",$input_line);
    
    //人数分繰り返す
    for($a=0; $a<$array1[0];$a++){
        $input_line = trim(fgets(STDIN));
        $array2=explode(" ",$input_line);
        $num = 0;
        
        //紙の数繰り返す
        for($b=0; $b<$array1[1]; $b++){
            if($array2[$b]==$array1[2]){
                $num++;
            }
        }
        echo $num."\n";
            
    }
?>