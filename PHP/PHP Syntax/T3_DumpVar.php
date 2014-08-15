<?php
$variable = 222;

if (is_numeric($variable)) {
    var_dump($variable);
} else {
    echo gettype($variable);
}
?>