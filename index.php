<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <title>СПА ДЕМО</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

if (!empty($_POST)) {
    include 'functions.php';

    $login = $_POST['login'] ?? null; // запись логина
    $password = $_POST['password'] ?? null; // запись пароля
    $time_input = $_POST['time_input'] ?? null; //запись времени входа на сайт
    $birthday_input = $_POST['date'] ?? null; //запись ДР, если пользователь написал
}
    

?>

<header>
    <div class="header">

        <div class="logo">
		    <h1>SPA DEMO</h1>   
	    </div>

        <div class="links">
            <a href="contacts.php">Контакты</a>
            <a href="price.php">Цены</a>
        </div>

        <div class = "msg">
        <?php
            if (!empty($_POST)) {
                //echo '<button onClick="window.location.href=window.location.href">Выход</button>';
                echo $_SESSION['message'] . '<br/>';
                echo "Вам предоставлена персональная скидка! <br/>";
                echo timeMessage($time_input) . '<br/>';
                echo birthdayMessage($birthday_input, $users2, $login) . '<br/>';
                echo '<button onClick="window.location.href=window.location.href">Выход</button>';
            }
            else {
                echo '<form action="enter.php" method="get"><button type="submit" width = "100px">Войти</button></form>';
            }    
        ?> 
        </div>
    </div>   
</header>
<section class="spa_demo">
        <article>
            <a href="#">
                <h2 class>Стоун-ритуал</h2>
            </a>
            <div class="article-meta">
                <a href="#">Подробнее</a>
            </div>
            <img src="images/stoneritual.png">
            <p> Стоун ритуал - это сочетание балийской техники релаксации
             с использованием горячих базальтовых камней. Базальтовые экзотические
             камни несут в себе не только тепло, но и мощную энергетику. Уже сами 
             по себе камни избавляют от дискомфорта в мышцах и снимают стресс. 
             Стоун ритуал в высочайшей степени расслабляет мышцы, увеличивает 
             интенсивность обменных процессов, приносит ощущение физического покоя 
             и душевного равновесия. Помимо этого, регулярные сеансы стоун-ритуала 
             творят настоящие чудеса: оказывают положительный эффект на работу 
             вегетативной нервной системы, помогают преодолеть депрессию, хроническую усталость. 
            </p>
        </article>

        <article>
            <a href="#">
                <h2>Тайский традиционный ритуал</h2>
            </a>
            <div class="article-meta">
                <a href="#">Подробнее</a>
            </div>
            <img src="images/kimono.png">
            <p>Тайский традиционный ритуал — классический и самый популярный тайский ритуал, 
                визитная карточка тайского спа. Он включает в себя тщательную проработку 
                биологически активных точек тела и элементы «ленивой йоги» — растяжки
                и скручивания. Основными отличительными чертами этого ритуала являются 
                активное использование мастерами ладоней, локтей и даже стоп. Ритуал особенно
                полезен людям, ведущим малоподвижный образ жизни.Ритуал проводится в хлопковом 
                костюме на мате. Вы можете выбрать предпочтительную силу воздействия от слабой до очень сильной.
            </p>
        </article>

        <article>
            <a href="#">
                <h2>Тайский арома ритуал</h2>
            </a>
            <div class="article-meta">
                <a href="#">Подробнее</a>
            </div>
            <img src="images/taimassaj.png">
            <p>Тайский арома-ритуал является более расслабляющей
             и мягкой вариацией традиционного ритуала. Такой эффект 
             достигается за счет использования ароматических масел. 
             Ритуал оказывает расслабляющее воздействие на нервную систему, 
             а ароматические масла благоприятно воздействуют на кожу, 
             выводят токсины и способствуют улучшению кровообращения.
             В связи с этим мы рекомендуем не смывать масло несколько 
             часов после ритуала.
            </p>
        </article>

        <article>
            <a href="#">
                <h2>Балийский арома ритуал</h2>
            </a>
            <div class="article-meta">
                <a href="#">Подробнее</a>
            </div>
            <img src="images/balimassaj.png">
            <p>Балийский арома ритуал - это самый мягкий и расслабляющий
              из ритуалов нашего спа-салона. Он делается исключительно пальцами
              и ладонями с активным использованием ароматических масел. 
              Ритуал направлен на снятие напряжения в мышцах, стимуляцию оттока
              лимфы и улучшение кровообращения.
            </p>
        </article>

        <article>
            <a href="#">
                <h2>Фейс-ритуал</h2>
            </a>
            <div class="article-meta">
                <a href="#">Подробнее</a>
            </div>
            <img src="images/face.png">
            <p>Фейс-ритуал - традиционная тайская процедура по уходу за кожей 
              лица и снятию напряжения с верхней части тела. Ритуал начинается
              с очищения и скрабирования лица, после чего наносится тонизирующая 
              маска. Во время ее действия мастер работает с шейно-воротниковой 
              зоной и головой. После снятия маски и нанесения специального крема
              идет работа с мышечным корсетом лица, мастер стимулирует энергетические 
              точки, расположенные на лице.<br>

              В результате ритуала расслабляются мимические мышцы, разглаживается
              кожа и исчезают морщины. Фейс-ритуал способствует возвращению упругости 
              кожи, восстановлению нормального кровообращения и улучшению цвета 
              лица.

            </p>
        </article>

        <article>
            <a href="#">
                <h2>Тайские традиции</h2>
            </a>
            <div class="article-meta">
                <a href="#">Подробнее</a>
            </div>
            <img src="images/spa.png">
            <p>Программа является классикой тайского спа-салона, любима как мужчинами, 
              так и женщинами всех возрастов.<br>
              <br>
              Общая продолжительность — 120-150 минут*<br>
              <br>
              Этапы программы:<br>
              <br>
              - Распаривание на выбор (кедровая сауна/молочная ванна) - 30 минут;<br>
- Пилинг тела с использованием скраба (иланг-иланг с жасмином/бамбук/миндаль/ лемонграсс) - 30 минут;<br>
- Обертывание тела на основе маски (виноград и зеленый кофе/голубая глина и ламинария) - 30 минут;<br>
- Тайский арома-ритуал с кокосовым маслом.<br>
<br>
*По желанию гостя можно исключить распаривание, либо обертывание.
            </p>
        </article>
    </section>


    <footer>
        <div class="links">
            <a href="index.php">В начало</a>
            <a href="contacts.php">Контакты</a>
            <a href="price.php">Цены</a>
        </div>

        <div class="copyright">Copyright @ SPA DEMO 2022</div>
    </footer>

</body>
</html>