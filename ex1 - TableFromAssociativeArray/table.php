<!DOCTYPE html>
<html lang="UTF-8">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale">
    
    <title>Document</title>
    <style>
        table {
            border = "1px";
        }
    </style>
</head>

<body>
<h1>Table</h1>

<?php
    // $arr = array(5, "Ivan", "Gosho", "Pesho", 56);
    // echo "<p>" . $arr[1] . "</p>";
    // echo "<p>" . $arr[0] . "</p>";
    // echo $arr[3];

    $phoneBook = array(  
        // key => value
        "Ivan" => "0883423561",
        "Pesho" => "0897255121",
        "Gosho" => "0917277123",
        "Stamat" => "0999999999"
    );

    // echo "<p>" . $phoneBook["Ivan"] . "</p>";

    echo "<table>";
    
    echo    "<thead>";
    echo        "<tr>";
    echo            "<th>Name</th>";
    echo            "<th>Phone Number</th>";
    echo        "</tr>";
    echo    "</thead>";
    
    echo    "<tbody>";
    
    foreach($phoneBook as $k => $v) {
        echo "<tr>";
        echo    "<td>" . $k . "</td>";
        echo    "<td>" . $v . "</td>";
        echo "</tr>";
    }

    echo    "</tbody>";
    echo "</table>";

?>
</body>
</html>