<?php

$result = NULL;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ((isset($_POST['var1']) && isset($_POST['var2'])) && ($_POST['var1'] !== "" || $_POST['var1'] !== "")) {
        $operation = $_POST['operation'];
        switch ($operation) {
            case '+':
                $result = $_POST['var1'] + $_POST['var2'];
                break;
            case '-':
                $result = $_POST['var1'] - $_POST['var2'];
                break;
            case 'x':
                $result = $_POST['var1'] * $_POST['var2'];
                break;
            case '/':
                $result = $_POST['var1'] / $_POST['var2'];
                break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>


<body>
    <h1>Calculator</h1>

    <form method="POST" action="">
        <label for="var1">Variable 1</label>
        <input type="number" name="var1" />

        <label for="var2">Variable 2</label>
        <input type="number" name="var2" />

        <br>
        <input type="submit" value="+" name="operation" />
        <br>
        <input type="submit" value="-" name="operation" />
        <br>
        <input type="submit" value="x" name="operation" />
        <br>
        <input type="submit" value="/" name="operation" />
        <br>
    </form>

    <?php
    if ($result !== NULL) {
        echo "El resultado es $result";
    } else {
        echo "Falta realizar cuenta!";
    }
    ?>
</body>

</html>