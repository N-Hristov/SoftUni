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
<?php
$colorsArr = array("yellow", "green", "black", "silver", "orange", "red", "blue");
$carsArr = [];
if (isset($_POST['cars'])) {
    $carsArr = explode(', ', $_POST['cars']);
}

?>
<form method="POST">
    <input type="text" name="cars" id="cars" placeholder="Type in cars">
    <button type="submit">Show Result</button>
    <table>
        <tr>
            <th>Car</th>
            <th>Color</th>
            <th>Count</th>
        </tr>
        <tbody>
        <?php foreach ($carsArr as $car): ?>
            <tr>
                <td><?= $car ?></td>
                <td><?= $colorsArr[array_rand($colorsArr)] ?></td>
                <td><?= rand(1, 5) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</form>
</body>
</html>