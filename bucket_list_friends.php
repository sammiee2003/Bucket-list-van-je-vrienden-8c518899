<?php

echo "hoeveel vrienden zal ik om hun droom vragen?"."\n";
$aantal = readline("");

if (is_numeric($aantal)) {
    $bucket = array();
    for ($i=1; $i <= $aantal; $i++) {
        echo 'wat is jou naam?'."\n";
        $namen = readline(""); 
        echo 'wat is jou droom?'."\n";
        $dromen = readline("");
        $totaal[$namen] = $dromen;
    }
    
    foreach ($totaal as $namen1 => $dromen1) {
        echo "$namen1 heeft als droom $dromen1"."\n";
    }

} else {
    echo "dit is geen getal";
}



?>




