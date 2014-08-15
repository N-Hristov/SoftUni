<?php

function NonRepeatingDigits($input){
    $nonRepeatNumbers = [];
    for ($i = 100; $i <= $input; $i++) {
        if ($i > 999) {
            break;
        } if ( (strval($i)[0] != strval($i)[1]) &&
            (strval($i)[1] != strval($i)[2]) &&
            (strval($i)[2]) != strval($i)[0] ) {
            $nonRepeatNumbers[] = $i;
        }

    }
    if (count($nonRepeatNumbers) === 0) {
        $allNumbers = "no";
    } else {
        $allNumbers = implode(", ", $nonRepeatNumbers);
    }

    echo $allNumbers . "\n" . "\n";

}
NonRepeatingDigits(1234);
NonRepeatingDigits(145);
NonRepeatingDigits(15);
NonRepeatingDigits(247);
?>

