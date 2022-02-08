<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>TEST | Niya Nicolova</title>
</head>

<body>
    <div id="test">
        <h1>Тест</h1>

        <form action="http://localhost/RRS/ex3/result.php">

            <div class="question">
                <label for="days">Колко дни има в една седмица? </label>
                <select id="days" name="days_of_the_week">
                    <option value="zero" selected>Моля, изберете опция.</option>
                    <option value="thirty_one">Тридесет и един</option>
                    <option value="twelve">Дванадесет</option>
                    <option value="twenty_four">Двадесет и четири</option>
                    <option value="seven">Седем</option>
                </select>
            </div>

            <div class="question">
                <label for="animal">Кое е най-голямото животно на Земята? </label>
                <select id="animal" name="largest_animal">
                    <option value="zero" selected>Моля, изберете опция.</option>
                    <option value="elephant">Слон</option>
                    <option value="whale">Син Кит</option>
                    <option value="giraffe">Жираф</option>
                    <option value="lizard">Комодски Варан</option>
                </select>
            </div>

            <div class="question">
                <label for="rainbow">Колко цветове има дъгата? </label>
                <select id="rainbow" name="rainbow_colors">
                    <option value="zero" selected>Моля, изберете опция.</option>
                    <option value="seven">Седем</option>
                    <option value="six">Шест</option>
                    <option value="five">Пет</option>
                    <option value="eight">Осем</option>
                </select>
            </div>

            <div class="question">
                <label for="planet">Коя е най-голямата планета в Слънчевата система? </label>
                <select id="planet" name="largest_planet">
                    <option value="zero" selected>Моля, изберете опция.</option>
                    <option value="saturn">Сатурн</option>
                    <option value="jupiter">Юпитер</option>
                    <option value="mars">Марс</option>
                    <option value="neptune">Нептун</option>
                </select>
            </div>

            <div class="question">
                <label for="street">Кой живее на ул. Привит Драйв, No. 4? </label>
                <select id="street" name="privet_drive">
                    <option value="zero" selected>Моля, изберете опция.</option>
                    <option value="percy_jackson">Пърси Джаксън</option>
                    <option value="merlin">Мерлин</option>
                    <option value="the_hobbit">Билбо Бегинс</option>
                    <option value="harry_potter">Хари Потър</option>
                </select>
            </div>

            <div class="question">
                <label for="country">Коя държава има най-голяма популация? </label>
                <select id="country" name="population_country">
                    <option value="zero" selected>Моля, изберете опция.</option>
                    <option value="china">Китай</option>
                    <option value="india">Индия</option>
                    <option value="russia">Русия</option>
                    <option value="south_korea">Южна Корея</option>
                </select>
            </div>

            <div class="question">
                <label for="colors">Кои са основните цветове? </label>
                <select id="colors" name="primary_colors">
                    <option value="zero" selected>Моля, изберете опция.</option>
                    <option value="rgb">Червено, зелено, синьо</option>
                    <option value="rby">Червено, синьо, жълто</option>
                    <option value="wb">Бяло и черно</option>
                    <option value="opb">Оранжево, лилаво, кафяво</option>
                </select>
            </div>

            <div class="question">
                <label for="cat">Кое е най-голямото животно от семейство котки? </label>
                <select id="cat" name="largest_cat">
                    <option value="zero" selected>Моля, изберете опция.</option>
                    <option value="lion">Лъв</option>
                    <option value="panther">Пантера</option>
                    <option value="tiger">Тигър</option>
                    <option value="cheetah">Гепард</option>
                </select>
            </div>

            <div class="question">
                <label for="spider">Колко крака има паяка? </label>
                <select id="spider" name="spider_legs">
                    <option value="zero" selected>Моля, изберете опция.</option>
                    <option value="eight">Осем</option>
                    <option value="six">Шест</option>
                    <option value="four">Четири</option>
                    <option value="ten">Десет</option>
                </select>
            </div>

            <div class="question">
                <label for="movies">Колко на брой са филмите от поредицата Междузвездни Войни? </label>
                <select id="movies" name="star_wars">
                    <option value="zero" selected>Моля, изберете опция.</option>
                    <option value="nine">Девет</option>
                    <option value="six">Шест</option>
                    <option value="seven">Седем</option>
                    <option value="ten">Десет</option>
                </select>
            </div>

            <div class="submit">
                <input type="submit" value="Предай теста!">
            </div>

            <?php
                if(isset($_SESSION['counter'])) {
                    if($_SESSION['counter'] == 0) {
                        echo "<h1 class='result'>Нямате верни отговори.</h1>";
                    } else {
                        echo "<h1 class='result'>Имате ". $_SESSION['counter'] . "/10 верни отговора.</h1>";
                    }
                }

                unset($_SESSION['counter']);
            ?>
        </form>
    </div>
</body>
</html>