<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tags</title>
</head>
<body>
<form method="post">
    <input type="text" name="FormVal" placeholder="Type in tags">
    <button type="submit">Submit</button>
    <?php
    if (isset($_POST['FormVal'])) {
        $enteredString = $_POST['FormVal'];
        $enteredArray = explode(",", $enteredString);
        echo "<p>";
        foreach ($enteredArray as $key => $value) {
            echo "<br> $key : $value";
        }
        echo "</p>";
    }
    ?>
</form>
</body>
</html>