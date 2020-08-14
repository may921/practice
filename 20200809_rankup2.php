<?php
    // STEP: 20 昇順ソート

    $input_line = trim(fgets(STDIN));
    for($a=0; $a<$input_line;$a++){
        $input = trim(fgets(STDIN));
        $array[] = $input;
    }
    
    sort($array);
    
    for($a=0; $a<$input_line;$a++){
        
        echo $array[$a]."\n";
    }
?>

<?php
    // STEP: 22 辞書式ソート

    //行数取得
    $input_line = trim(fgets(STDIN));
    
    //行数分
    for($a=0; $a<$input_line;$a++){
        $input = trim(fgets(STDIN));
        $kou = explode(" ", $input);
        $num = strlen($kou[1]);
        if($num==1){
            $input = str_replace(" ", ".0", $input);
            $array[] = $input;  
        }elseif($num==2){
            $input = str_replace(" ", ".", $input);
            $array[] = $input;
        }
        
    }
    rsort($array);
    for($a=0; $a<$input_line;$a++){
        $input = $array[$a];
        $kou = explode(".", $input);
        $num = substr($kou[1], 0, 1);
        if($num==0){
            $input = str_replace(".0", " ", $input);
            echo $input."\n";
        }else{
            $input = str_replace(".", " ", $input);
            echo $input."\n";
        }
    }

?>




<?php
    // ソート

    //行数取得
    $input_line = trim(fgets(STDIN));
    
    //行数分
    for($a=0; $a<$input_line;$a++){
        $input = trim(fgets(STDIN));
        //わける
        $kou = explode(" ", $input);
        $num = strlen($kou[0]);
        if($num==1){
            $input = $kou[1].".0".$kou[0];
          $array[] = $input;  
        }elseif($num==2){
            $input = $kou[1].".".$kou[0];
          $array[] = $input;
        }
        
    }
    rsort($array);
    for($a=0; $a<$input_line;$a++){
        
        //2.01
        $input = $array[$a];
        //$kou[1]=01  $kou[0]=2
        $kou = explode(".", $input);
        //$num=0
        $num = substr($kou[1], 0, 1);
        
        if($num==0){
            //$b=1
            $b = substr($kou[1], 1, 1);
            
            $input = $b." ".$kou[0];
            echo $input."\n";
          
        }else{
            $input = $kou[1]." ".$kou[0];
            echo $input."\n";
          
        }
    }

?>

