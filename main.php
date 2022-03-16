<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fenixblack site</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="flex-container">

    <div class="header">
        <?php include 'logo.inc.php' ?>
        <?php include 'menu.inc.php' ?>
    </div>
    <h1>  <?php /** @var string $p */
        echo $p  ?> </h1>
    <div class="about_me">



        <div class="data">
            <div class="myImg">
                <?php echo '<img src="img/logo1.jpg" alt="Уильям Берроуз">'; ?>
            </div>

            <div class="fullname">
                <p> Меня зовут
                    <?php /** @var string $name*/
                    /** @var string $surname */
                    echo $name, ' ', $surname . '<br>';
                    /** @var string $city */
                    echo 'город', ' ', $city; ?>
                </p>

                <p> Мне
                    <?php /** @var integer $age */
                    echo $age;   ?>
                    лет </p>
                <p> Мы научились создавать переменные </p>
                <p> Изучили простые операции с ними </p>
            </div>
        </div>

        <div class="knowledge">

            <?php  include 'knowledge.inc.php'; ?>
            <?php
            /** @var double $a */
            /** @var double $b */
            /** @var double $c */
            echo $a, ' ', $b, ' ', $c;
            ?> <br>

            <?php
            $a = 20;
            $b = 40;
            $c = $a + $b;
            echo $c;
            ?>   <br>
            <?php
            /** @var double $d */
            echo $d;
            ?>

        </div>

        <div class="article">
            <p class="text">
                Иногда я мечтаю спасти мир. Спасти всех от невидимой руки. Той, что клеймит нас бейджем сотрудника. Той, что заставляет нас работать на них … <br> Той, что ежедневно управляет нами без нашего ведома. Но я не могу остановить ее. Я не избранный. Я просто анонимус. <br><br>
                Дайте человеку пистолет, и он ограбить банк. Но дайте человеку банк и он ограбит весь мир.
            </p>
        </div>
    </div>

    <?php include 'footer.inc.php' ?>

</div>


</body>
</html>