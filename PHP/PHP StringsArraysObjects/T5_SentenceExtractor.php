<!DOCTYPE html>
<html>
<head>
    <title>Text Filter</title>
    <meta charset="UTF-8">
</head>
<body>
<form method="post">
    <textarea name="text" id="" cols="50" rows="5"></textarea><br>
    <input type="text" name="word"/><br>
    <button type="submit">Extract Sentences</button>
</form>
<?php
if (isset($_POST['text']) && isset($_POST['word']) && !empty($_POST['text']) && !empty($_POST['word'])) {
    $sentences = preg_split("/(?<=[.?!])\s*/", $_POST['text'], -1, PREG_SPLIT_NO_EMPTY);
    $sentences = array_map('trim', $sentences);
    $word = $_POST['word'];
    foreach ($sentences as $sentence) {
        if (preg_match("/\s+$word\s+.*[.?!]+$/", $sentence)) {
            echo "<p>$sentence</p>";
        }
    }
}

?>
</body>
</html>