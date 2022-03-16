<?php
echo "Рассмотрим ввод от пользователя через <br><br>";
echo "Решение линейного уравнения a+bx=0 <br>";
?>

    <form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>"><br>
        a:<input type="text" name="a"><br>
        b:<input type="text" name="b"><br>
        <input type="submit">
    </form>


<?php
$a=intval(isset($_GET['a']) ? $_GET['a'] : 6);
$b=intval(isset($_GET['b']) ? $_GET['b'] : 2);
$x=0;
if($b!=0)
{
    $x=(-$a)/$b;
    echo "<br> x=";
    echo $x;
}
else{
    echo "<br> Решения нет <br>";
}
?>

<?php
$a = '<br> Мои знания на';
$b = 100;
$c = '%';
?>


<?php
$price = $c;

if($price >= 15 && $price <= 20)
    $d = 'Это число находится между 15 и 20';
else
    $d = 'Число не входит в интервал от 15 до 20';
?>