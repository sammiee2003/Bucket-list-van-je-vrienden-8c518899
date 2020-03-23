<?php

$aantal = readline("hoeveel vrienden zal ik vragen om hun droom?");

if(is_numeric($aantal)){
    $bucket = array();
    for($i=1; $i <= $aantal; $i++){
        $namen = readline("wat is je naam?");
        $dromen = readline("wat is jou droom?");
        $totaal[$namen] = $dromen;
    }

  foreach ($totaal as $namen1 => $dromen1) {
    echo "$namen1 heeft als droom $dromen1""\n";
  }



}else{
    echo "dit is geen getal";
}



?>




