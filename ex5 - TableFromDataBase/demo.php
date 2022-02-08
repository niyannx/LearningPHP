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
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $connection = new PDO("mysql:host=$servername;dbname=rrs10db", $username, $password);

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $PDOStatement = $connection->prepare("SELECT * FROM rrs10data");
        $PDOStatement->execute();
        $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);
        $data = $PDOStatement->fetchAll();

        $table = "<table>";

        $table .=   "<thead>";
        $table .=       "<tr>";
        $table .=           "<th>ID</th>";
        $table .=           "<th>FirstName</th>";
        $table .=           "<th>Age</th>";
        $table .=       "</tr>";
        $table .=   "</thead>";

        $table .=   "<tbody>";
        for($i = 0; $i < count($data); $i++){
            $current_row = $data[$i];
            $table .=           "<tr>";
            $table .=               "<td>" . $current_row['id'] . "</td>";
            $table .=               "<td>" . $current_row['firstName'] . "</td>";
            $table .=               "<td>" . $current_row['age'] . "</td>";
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