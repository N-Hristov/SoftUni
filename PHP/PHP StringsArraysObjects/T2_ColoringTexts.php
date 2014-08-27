<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>WordMapping</title>
    <style>
        table, tr, td {
            border: 1px solid black;
        }

        .red {
            color: #ff0000;
        }

        .blue {
            color: #0000ff;
        }
    </style>
</head>
<body>
<form method="post">
    <textarea name="input" id="" cols="30" rows="3"></textarea>
    <button type="submit">Color Text</button>
</form>
<br/>
<?php
if (isset($_POST["input"])) {
    if (!empty($_POST["input"])) {
        $input = $_POST['input'];
        $input = str_split($input);
        foreach ($input as $key => $value) {
            if ((ord($value) % 2) == 0) {
                ?>
                <span class="red"> <?php echo $value; ?> &nbsp</span>
        <?php   } else { ?>
                <span class="blue"> <?php echo $value; ?> &nbsp</span>
                <?php
            }
        }
    }
}
?>



</body>
</html>