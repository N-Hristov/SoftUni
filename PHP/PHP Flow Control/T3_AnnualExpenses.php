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
function getMonthName($number)
{
    return date("F", strtotime(date("d-$number-Y")));
}

?>
<?php
$years = 0;
$nowdate = getdate();
if (isset($_POST['years'])) {
    $years = $_POST['years'];
}
$currentYear = $nowdate['year'];
?>
<form method="post">
    <input type="text" name="years">
    <button type="submit">Submit</button>
    <table border="1">
        <thead>
        <tr>
            <th>Year</th>
            <?php
            for ($month = 1; $month <= 12; $month++) {
                echo "<th>" . getMonthName($month) . "</th>";
            }
            ?>
            <th>Total:</th>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($year = $currentYear; $year > $currentYear - $years; $year--) {
            echo "<tr><td>$year</td>";
            $total = 0;
            for ($month = 1; $month <= 12; $month++) {
                $currentCost = rand(0, 999);
                echo "<td>" . $currentCost . "</td>";
                $total += $currentCost;
            }
            echo "<td>$total</td></tr>";
        }
        ?>
        </tbody>
    </table>
</form>
</body>
</html>