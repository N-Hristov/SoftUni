<!DOCTYPE html>
<html>
<head>
    <title>Text Filter</title>
    <meta charset="UTF-8">
</head>
<body>
<form method="post">
    <textarea name="text" id="" cols="50" rows="5"></textarea><br>
    <input type="text" name="bans"/><br>
    <button type="submit">Filter Text</button>
</form>
<?php
if (isset($_POST['text']) && isset($_POST['bans']) && !empty($_POST['text']) && !empty($_POST['bans'])) {
    $bans = explode(', ', $_POST['bans']);
    $text = $_POST['text'];
    foreach ($bans as $word) {
        $text = str_replace($word, str_repeat('*', strlen($word)), $text);
    }
    echo "<p>$text</p>";
}
?>
</body>
</html>