<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cars</title>
    <style>
        table, tr, th, td{
            border: 1px solid black;
        }
        input{
            display: inline-block;
        }
    </style>
</head>
<body>
<form method="post">
    <input type="text" name="inputStr">
    Check Palindrome<input type="radio" name="method" value="1">
    Reverse String<input type="radio" name="method" value="2">
    Split<input type="radio" name="method" value="3">
    Hash String<input type="radio" name="method" value="4">
    Shuffle String<input type="radio" name="method" value="5">
    <button type="submit">Submit</button>
</form>
</body>
</html>
<?php
if (isset($_POST['inputStr'])) {
    $str = $_POST['inputStr'];
    switch (intval($_POST['method'])) {
        case 1:
            $result = true;
            for ($i=0; $i < strlen($str); $i++) {
                if (!(substr($str, $i) == substr($str, -$i))){
                    $result = false;
                }
            }
            if ($result == true){
                echo $str . " is a palindrome";
            }
            else{
                echo $str . " is not a palindrome";
            }
            break;
        case 2:
            $result = strrev($str);
            echo $result;
            break;
        case 3:
            $result = implode(' ', str_split($str));
            echo $result;
            break;
        case 4:
            $result = crypt($str);
            echo $result;
            break;
        case 5:
            $result = shuffle($str);
            echo $result;
            break;

    }

}
?>