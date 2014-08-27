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
            display: block;
        }
    </style>
</head>
<body>
<form method="post">
    <input type="text" name="str" placeholder="enter string to sum">
    <button type="submit">Submit</button>
</form>
<table>
    <?php
    if (isset($_POST['str'])) {
        $str = explode(", ", $_POST['str']);
        foreach ($str as $key => $value) {
            if (is_numeric($value) == false) {
                $currentResult = "I cannot sum that";
            } else {
                $totalValue = 0;
                for ($i = 0; $i < strlen($value); $i++) {
                    $intValue = intval(substr($value, $i, 1));
                    $totalValue+= $intValue;
                }
                $currentResult = $totalValue;
            }?>
            <tr>
                <td><?php echo $value ?></td>
                <td><?php echo $currentResult?></td>
            </tr>
        <?php
        }
    }
    ?>
</table>
</body>
</html>