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
    // STEP: 21 降順ソート

    $input_line = trim(fgets(STDIN));
    for($a=0; $a<$input_line;$a++){
        $input = trim(fgets(STDIN));
        $array[] = $input;
    }
    
    rsort($array);
    
    for($a=0; $a<$input_line;$a++){
        
        echo $array[$a]."\n";
    }
?>



