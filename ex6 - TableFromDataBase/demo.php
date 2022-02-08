<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Table</title>
</head>

<body>
<h1>Table - Countries</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$servername;dbname=geography", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM geography.countries;";

    $PDOStatement = $connection->prepare($query);
    $PDOStatement->execute();
    $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);

    $data = $PDOStatement->fetchAll();

    $table = "<table>";

    $table .=   "<thead>";
    $table .=       "<tr>";
    $table .=           "<th>Country code</th>";
    $table .=           "<th>Country name</th>";
    $table .=           "<th>Population</th>";
    $table .=           "<th>Capital</th>";
    $table .=       "</tr>";
    $table .=   "</thead>";

    $table .=   "<tbody>";
    for($i = 0; $i < count($data); $i++){
        $current_row = $data[$i];
        $table .=           "<tr>";
        $table .=               "<td>" . $current_row['country_code'] . "</td>";
        $table .=               "<td>" . $current_row['country_name'] . "</td>";
        $table .=               "<td>" . $current_row['population'] . "</td>";
        $table .=               "<td>" . $current_row['capital'] . "</td>";
        $table .=           "</tr>";
    }
    $table .=   "</tbody>";

    $table .= "</table>";

    echo $table;
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


?>
</body>
</html>