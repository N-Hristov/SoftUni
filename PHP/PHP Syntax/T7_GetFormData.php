<?php
$output = "";
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $name = $_POST['name'];
    $age = $_POST["age"];
    $sex = $_POST['sex'];
    $output = "My name is $name. I am $age years old. I am $sex.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Data</title>
    <link rel="stylesheet" href="styles/T7_form.css"/>
</head>
<body>
<form method="post" action="">
    <input placeholder="Name" name="name" type="text"/>
    <input placeholder="Age" name="age" type="text"/>
    <label for="male"><input id="male" name="sex" type="radio" value="male" />Male</label>
    <label for="female"><input id="female" name="sex" type="radio" value="female" />Female</label>
    <input name="submit" type="submit"/>

</form>

<?php echo $output; ?>

</body>
</html>