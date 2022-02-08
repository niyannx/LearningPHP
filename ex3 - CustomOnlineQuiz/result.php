<?php
    session_start();
    echo "<pre>";
    echo var_dump($_GET);
    echo "</pre>";

    $counter = 0;

    if(isset($_GET["days_of_the_week"])) {
        $answer = $_GET["days_of_the_week"];
        if($answer == "seven") {
            $counter++;
        }
    }

    if(isset($_GET["largest_animal"])) {
        $answer = $_GET["largest_animal"];
        if($answer == "whale") {
            $counter++;
        }
    }

    if(isset($_GET["rainbow_colors"])) {
        $answer = $_GET["rainbow_colors"];
        if($answer == "seven") {
            $counter++;
        }
    }

    if(isset($_GET["largest_planet"])) {
        $answer = $_GET["largest_planet"];
        if($answer == "jupiter") {
            $counter++;
        }
    }

    if(isset($_GET["privet_drive"])) {
        $answer = $_GET["privet_drive"];
        if($answer == "harry_potter") {
            $counter++;
        }
    }

    if(isset($_GET["population_country"])) {
        $answer = $_GET["population_country"];
        if($answer == "china") {
            $counter++;
        }
    }

    if(isset($_GET["primary_colors"])) {
        $answer = $_GET["primary_colors"];
        if($answer == "rby") {
            $counter++;
        }
    }

    if(isset($_GET["largest_cat"])) {
        $answer = $_GET["largest_cat"];
        if($answer == "tiger") {
            $counter++;
        }
    }

    if(isset($_GET["spider_legs"])) {
        $answer = $_GET["spider_legs"];
        if($answer == "eight") {
            $counter++;
        }
    }

    if(isset($_GET["star_wars"])) {
        $answer = $_GET["star_wars"];
        if($answer == "nine") {
            $counter++;
        }
    }

    $_SESSION["counter"] = $counter;

    header('Location: http://localhost/RRS/ex3/test.php')

?>
