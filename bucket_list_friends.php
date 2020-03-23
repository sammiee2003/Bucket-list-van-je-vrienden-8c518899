<?php
$aantal = readline("Hoeveel vrienden zal ik vragen om hun droom?");
if (is_numeric($aantal)) {
    $bucket = array();
    for($i=1; $i <= $aantal; $i++){
        $namen =readline("wat is je naam?");
        $dromen = readline("Wat is jouw droom?");
        $totaal[$namen] = $dromen;
    }
    foreach ($totaal as $namen1 => $dromen1) {
        echo "$namen1 heeft als droom $dromen1".PHP_EOL;
    }
}else{
    echo "dit is geen getal.";
}

?>




