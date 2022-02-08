<?php
    session_start();
    echo "<pre>";
    echo var_dump($_GET);
    echo "</pre>";

    if (isset($_GET["n1"]) && isset($_GET["n2"]) && isset($_GET["op"])) {
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $op = $_GET["op"];

        if(is_numeric($n1) && is_numeric($n2)) {
            if ($op == "add") {
                $r = $n1 + $n2;
                $_SESSION["result"] = $r;
            } else if ($op == "sub") {
                $r = $n1 - $n2;
                $_SESSION["result"] = $r;
            } else if ($op == "mul") {
                $r = $n1 * $n2;
                $_SESSION["result"] = $r;
            } else if ($op == "div") {
                if($n2 == 0) {
                    $_SESSION["error"] = "Не можете да делите на 0.";
                } else {
                    $r = $n1 / $n2;
                    $_SESSION["result"] = $r;
                }
            } else if ($op == "") {
                $_SESSION["error"] = "Моля, изберете операция.";
            }
        } else {
            $_SESSION["error"] = "Моля, въведете само числа.";
        }
    } else {
        $_SESSION["error"] = "Направили сте промени в HTML.";
    }

    header("location: demo.php");
?>
