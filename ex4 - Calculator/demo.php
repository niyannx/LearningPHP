<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Calculator</title>
</head>

<body>
    <div>
        <h1>Calculator</h1>
        <form action="result.php">
            <table>
            <tbody>
                <tr>
                    <td><label for="n1">Number 1:</label></td>
                    <td><input type="number" id="n1" name="n1"></td>
                </tr>
                <tr>
                    <td><label for="n2">Number 2:</label></td>
                    <td><input type="number" id="n2" name="n2"></td>
                </tr>
                <tr>
                    <td><label for="op" id="op">Operation:</label></td>
                    <td>
                        <select name="op" id="op">
                            <option value="" selected></option>
                            <option value="add">+</option>
                            <option value="sub">-</option>
                            <option value="mul">*</option>
                            <option value="div">/</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input id="r" type="submit" value="Изчисли"></td>
                </tr>
                <?php
                    if(isset($_SESSION["error"])) {
                        echo '<tr class="error">
                                <td colspan="2">' . $_SESSION["error"] . '</td>
                                </tr>';
                    }

                    unset($_SESSION["error"]);

                    if (isset($_SESSION["result"])) {
                        echo '<tr class="result">
                                <td colspan="2">' . $_SESSION["result"] . '</td>
                                </tr>';
                    }

                    unset($_SESSION["result"])
                ?>
            </tbody>
            </table>
        </form>
    </div>
</body>
</html>
