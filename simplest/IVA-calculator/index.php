<?php

$iva = 1.21;

$x1 = ($_GET["x1"] == "") ? 0 : $_GET["x1"];
$x2 = ($_GET["x2"] == "") ? 0 : $_GET["x2"];
$x3 = ($_GET["x3"] == "") ? 0 : $_GET["x3"];

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
    <link rel='stylesheet' type='text/css' media='screen' href='./assets/css/style.css'>
</head>


<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">IVA Calculator</a>
        </div>
    </nav>

    <div class="container w-25 border p-4 mt-4">
        <form method="GET" action="">
            <div class="mb-3">
                <label class="form-label" for="x1">x1</label>
                <input type="number" name="x1" class="form-control" />
            </div>
            <div class="mb-3">
                <label class="form-label" for="x2">x2</label>
                <input type="number" name="x2" class="form-control" />
            </div>
            <div class="mb-3">
                <label class="form-label" for="x3">x3</label>
                <input type="number" name="x3" class="form-control" />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="container w-25 border p-4 mt-4">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Variable</th>
                    <th scope="col">Value without IVA</th>
                    <th scope="col">Value with IVA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">x1</th>
                    <td><?php echo $x1; ?></td>
                    <td><?php echo $x1 * $iva; ?></td>
                </tr>
                <tr>
                    <th scope="row">x2</th>
                    <td><?php echo $x2; ?></td>
                    <td><?php echo $x2 * $iva; ?></td>
                </tr>
                <tr>
                    <th scope="row">x3</th>
                    <td><?php echo $x3; ?></td>
                    <td><?php echo $x3 * $iva; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>