<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>WordMapping</title>
    <style>
        table,tr,td{
            border:1px solid black;
        }
    </style>
</head>
<body>
<form method="post">
    <textarea name="wordcounter" id="" cols="30" rows="3"></textarea>
    <button type="submit">Count Words</button>
</form>
<br/>
<?php
if (isset($_POST["wordcounter"])) {
    if (!empty($_POST["wordcounter"])) {
        echo "<table>";
        $split = preg_split('/\W+/', $_POST["wordcounter"], 0, PREG_SPLIT_NO_EMPTY);
        $counts = array_count_values($split);
        foreach ($counts as $word => $count) {
            echo "<tr><td>$word</td><td>$count</td></tr>";
        }

        echo "</table>";
    } else {
        echo "<p>" . "No words to count.". "</p>";
    }
}
?>
</body>
</html>
