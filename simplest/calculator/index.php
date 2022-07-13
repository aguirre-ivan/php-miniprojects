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
            case '*':
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .color-container {
            width: 16px;
            height: 16px;
            display: inline-block;
            border-radius: 4px;
        }

        a {
            text-decoration: none;
        }
    </style>

</head>


<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Calculator</a>
        </div>
    </nav>

    <div class="container w-25 border p-4 mt-4">
        <form method="POST" action="">
            <div class="mb-3">
                <label for="var1">Variable 1</label>
                <input type="number" name="var1" />
            </div>
            <div class="mb-3">
                <label for="var2">Variable 2</label>
                <input type="number" name="var2" />
            </div>
            <button type="submit" value="+" name="operation" class="btn btn-primary">+</button>
            <button type="submit" value="-" name="operation" class="btn btn-primary">-</button>
            <button type="submit" value="*" name="operation" class="btn btn-primary">x</button>
            <button type="submit" value="/" name="operation" class="btn btn-primary">/</button>
        </form>
    </div>

    <div class="container w-25 border p-4 mt-4">
        <?php
        if ($result !== NULL) {
            echo "El resultado es $result";
        } else {
            echo "Falta realizar cuenta!";
        }
        ?>
    </div>

</body>

</html>