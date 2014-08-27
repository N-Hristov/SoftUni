<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prime Numbers</title>

</head>
<body>
<form method="post">
    <input type="text" name="start" placeholder="start">
    <input type="text" name="end" placeholder="end">
    <button type="submit">Submit</button>

</form>
</body>
</html>


<?php


if (isset($_POST['start']) && isset($_POST['end'])) {
    $start = $_POST['start'];
    $end = $_POST['end'];
    for ($i=$start; $i <= $end; $i++) {
        if (is_prime($i)) {
            echo "<strong>$i</strong>" . ", ";
        }else{
            echo "$i" . ", ";
        }
    }
}
function is_prime($number)
{
    // 1 is not prime
    if ( $number == 1 ) {
        return false;
    }
    // 2 is the only even prime number
    if ( $number == 2 ) {
        return true;
    }
    // square root algorithm speeds up testing of bigger prime numbers
    $x = sqrt($number);
    $x = floor($x);
    for ( $i = 2 ; $i <= $x ; ++$i ) {
        if ( $number % $i == 0 ) {
            break;
        }
    }

    if( $x == $i-1 ) {
        return true;
    } else {
        return false;
    }
}



?>