<!DOCTYPE html>

<html lang="en">
<head>
    <title>Table</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
        td {
            text-align: center;
        }
        tfoot {
            font-weight: bold;
        }
        th, td {
            width: 100px;
            overflow: hidden;
        }
    </style>
</head>

<body>

<table>
    <thead>
    <tr>
        <th>NAME</th>
        <th>SALARY</th>
        <th>TOWN</th>
        <th>AGE</th>
    </tr>
    </thead>

    <tbody>
    <?php
    // open file to read from
    $file = fopen("namesInfo.txt", "r") or die("Unable to open file!");

    // variable to keep the name count in
    $count_of_names = 0;
    $sum_of_all_salaries = 0;
    $all_towns = array();
    $index_of_town = 0;
    $average_age = 0;

    // while (file not empty) -> feof = file end of file
    while (!feof($file)) {
        // array = this file line
        $array = fgets($file);

        // split line by " " and ":"
        $array = preg_split("/\s+|:/", $array);

        // count($array) = array.length
        for ($i = 0; $i < count($array); $i++) {

            // if current word == 'name'
            if ($array[$i] == 'name') {
                // increment count of all names
                $count_of_names++;

                // remove and fill with next ($i = index)
                array_splice($array, $i, 1);


            } else if ($array[$i] == 'salary' or $array[$i] == 'age' or $array[$i] == 'town') {
                array_splice($array, $i, 1);
            }
        }
        echo '<tr><td>';

        // element at index 0 is name
        // element at index 1 is salary
        // element at index 2 is town
        // element at index 3 is age

        $sum_of_all_salaries += $array[1];
        $all_towns[$index_of_town] = $array[2];
        $index_of_town++;
        $average_age += $array[3];

        // print current array, dividing each element into a different cell
        // (without the last element)
        for ($i = 0; $i < 3; $i++) {
            echo $array[$i] . '</td><td>';
        }

        // print last element without creating a cell afterwards
        echo $array[3] . '</td></tr>';
    }
    // close file
    fclose($file);
    ?>

    </tbody>
    <tfoot>

    <tr>
        <td>NUMBER OF PEOPLE</td>
        <td>SUM OF SALARIES</td>
        <td>MOST COMMON TOWN</td>
        <td>AVERAGE AGE</td>
    </tr>


    <?php

    $counted = array_count_values($all_towns);
    arsort($counted);
    $top_with_count = array_slice($counted, 0, 1, true);
    $most_common_town = implode(" ", array_keys($top_with_count));
    $average_age = $average_age / $count_of_names;

    echo '<tr><td>' . $count_of_names . '</td>';
    echo '<td>' . $sum_of_all_salaries . '</td>';
    echo '<td>' . $most_common_town . '</td>';
    echo '<td>' . round($average_age, 2) . '</td></tr>';
    ?>
    </tfoot>
</table>
</body>
</html>