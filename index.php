<?php
    // Initialisation des variables
    $presentTime = new DateTime;
    $destinationTime = new DateTime("2022-01-10 7:25");

    $presentTimeFormat = $presentTime->format("M d Y A h i");
    $destinationTimeFormat = $destinationTime->format("M d Y A h i");
    $presentDate = explode(" ",$presentTimeFormat);
    $destinationDate = explode(" ", $destinationTimeFormat);   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        border-collapse: collapse;
    }
    tr {
        border-bottom: 1px solid #ccc;
    }
    th, td {
        text-align: left;
        padding: 4px;
        text-align: center;
        width: 50px;
    }
</style>
<body>
    <table>
        <thead>
            <tr>
                <th>
                    <strong>Month</strong>
                </th>
                <th>
                    <strong>Day</strong>
                </th>
                <th>
                    <strong>Year</strong>
                </th>
                <th>
                    <strong>Hour/minute</strong>
                </th>
            </tr>
        </thead>
        <tr>
            <td><?= $destinationDate[0];?></td>
            <td><?= $destinationDate[1];?></td>
            <td><?= $destinationDate[2];?></td>         
            <td><?= $destinationDate[4] . ':' . $destinationDate[5];?></td>
        </tr>
        <tr>
            <td><?= $presentDate[0];?></td>
            <td><?= $presentDate[1];?></td>
            <td><?= $presentDate[2];?></td>
            <td><?= $presentDate[4] . ':' . $presentDate[5];?></td>
        </tr>
    </table>
</body>
</html>