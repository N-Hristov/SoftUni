<!DOCTYPE html>
<html>
<head>
    <title>Text Filter</title>
    <meta charset="UTF-8">
</head>
<body>
<form method="post">
    <textarea name="text" id="" cols="50" rows="5"></textarea><br>
    <button type="submit">Replace URLs</button>
</form>
<?php
if (isset($_POST['text'])  && !empty($_POST['text'])) {
    $text = ($_POST['text']);
    $text = str_replace('</a>', '[/URL]', $text);
    $text = preg_replace('/<a href="(.*?)">/', '[URL=\1]', $text);
    echo htmlentities($text);
}
?>
</body>
</html>